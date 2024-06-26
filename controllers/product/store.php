<?php

use App\CSRFToken;
use App\Database;
use App\Validator;

$tokenizer = new CSRFToken();
$db = new Database();
$validator = new Validator();

$data = [
  'csrf_token' => $_POST['csrf_token'],
  'product_name' => $_POST['product_name'],
  'product_price' => $_POST['product_price']
];

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

// Fields validation
if (!$validator->checkTextLength($data['product_name'], 5, 50)) {
  setErrorMessage('Username must not be empty or must be between 5 and 50 characters.');
}

if ($db->find('SELECT product_name FROM products WHERE product_name = :product_name', [':product_name' => $data['product_name']])) {
  setErrorMessage('The product <strong>' . $data['product_name'] . '</strong> already exists. Specify in the name if this is a different variant.');
}

if (!$validator->checkTextLength($data['product_price'], 1, 10)) {
  setErrorMessage('Price must not be empty or must be between 1 and 10 characters.');
}

if (!$validator->checkNumber($data['product_price'])) {
  setErrorMessage('Please enter a valid price.');
}

if (!empty(getErrorMessages())) {
  redirect('/product/add');
}

// Insert data
$db->query(
  'INSERT INTO products (product_name, product_price) VALUES (:product_name, :product_price)',
  [
    ':product_name' => $data['product_name'],
    ':product_price' => $data['product_price']
  ]
);
setSuccessMessage('Product <strong>' . $data['product_name'] . '</strong> has been successfully added.');
redirect('/dashboard/inventory');
