<?php

use App\CSRFToken;
use App\Database;
use App\Validator;

$tokenizer = new CSRFToken();
$db = new Database();
$validator = new Validator();

// Submitted data
$data = [
  'csrf_token' => $_POST['csrf_token'],
  'username' => $_POST['username'],
  'password' => $_POST['password'],
];

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

// Fields validation
if (!$validator->checkTextLength($data['username'], 2, 50)) {
  setErrorMessage('Username must be between 2 and 50 characters.');
}

if (!$validator->checkTextLength($data['password'], 2)) {
  setErrorMessage('Password must be between 2 and 255 characters.');
}

if (!empty(getErrorMessages())) {
  redirect('/admin/login');
}

// Authenticate
$user = $db->find(
  'SELECT * FROM admin WHERE username = :username',
  [
    'username' => $data['username'],
  ]
);

if (md5($data['password']) !== $user['password']) {
  setErrorMessage('Invalid credentials.');
  redirect('/admin/login');
}

setSuccessMessage('Welcome back, ' . $user['username'] . '!');
setSession('user', [
  'username' => $user['username'],
  'usertype' => 'admin',
]);
redirect('/dashboard');