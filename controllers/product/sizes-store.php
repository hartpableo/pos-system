<?php

use App\CSRFToken;
use App\Products;
use App\Validator;

$tokenizer = new CSRFToken();
$validator = new Validator();
$products_data = new Products();

$data = [
  'csrf_token' => $_POST['csrf_token'],
  'product_id' => $_POST['product_id'],
  'product_size' => $_POST['product_size'],
  'product_size_price' => $_POST['product_size_price']
];

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

// Fields validation
if (!$validator->checkTextLength($data['product_size_price'], 1, 10)) {
  setErrorMessage('Price must not be empty or must be between 1 and 10 characters.');
}

if (!$validator->checkNumber($data['product_size_price'])) {
  setErrorMessage('Please enter a valid price.');
}

if (!empty(getErrorMessages())) {
  redirect('/product/add/size?_product_id=' . $data['product_id']);
}

// Insert data to db
$product_size_data[$data['product_size']] = $data['product_size_price'];
$products_data->query(
  'UPDATE products SET variants = :product_size_data WHERE id = :id',
  [
    ':product_size_data' => json_encode($product_size_data),
    ':id' => $data['product_id']
  ]
);
$related_product = $products_data->find('SELECT * FROM products WHERE id = :id', [':id' => $data['product_id']]);
setSuccessMessage('A size variant for <strong>' . $related_product['product_name'] . '</strong> has been successfully added.');
redirect('/dashboard/inventory');
