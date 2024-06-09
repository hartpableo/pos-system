<?php

use App\CSRFToken;
use App\Database;
use App\Security;
use App\Validator;

$tokenizer = new CSRFToken();
$validator = new Validator();
$security = new Security();
$db = new Database();

// Submitted data
$data = [
  'csrf_token' => $_POST['csrf_token'],
  'name' => $_POST['name'],
  'tip' => $_POST['tip'],
  'enable_link' => $_POSTp['enable_link'] ?? FALSE,
  'created_at' => date('Y-m-d H:i:s'),
];
$data['social_link'] = $data['enable_link'] ? $_POST['social_link'] : NULL;

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

// Fields validation
if (!$validator->checkTextLength($data['name'], 3, 50)) {
  setErrorMessage('Display Name must be between 3 and 50 characters.');
}

if (!$validator->checkTextLength($data['tip'])) {
  setErrorMessage('Tip text must be between 3 and 255 characters.');
}

if ($data['enable_link'] && !$validator->checkLink($data['social_link'])) {
  setErrorMessage('Invalid link provided.');
}

if (!empty(getErrorMessages())) {
  redirect('/create-a-tip');
}

// Security
$data['name'] = $security->sanitizeText($data['name']);
$data['tip'] = $security->sanitizeText($data['tip']);

// Insert to database
$db->query(
  'INSERT INTO tips (name, tip, social_link, created_at) VALUES (:name, :tip, :social_link, :created_at)',
  [
    'name' => $data['name'],
    'tip' => $data['tip'],
    'social_link' => $data['social_link'],
    'created_at' => $data['created_at'],
  ]
);
setSuccessMessage('Your tip has been posted successfully!');
redirect();
