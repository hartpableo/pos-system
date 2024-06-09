<?php

use App\CSRFToken;
use App\Database;

$db = new Database();
$tokenizer = new CSRFToken();

// Submitted data
$data = [
  'csrf_token' => $_POST['csrf_token'],
  'tip_id' => $_POST['tip_id'],
];

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

if (!empty(getErrorMessages())) {
  redirect('/dashboard');
}

// Delete tip from database
$db->query(
  'DELETE FROM tips WHERE id = :id',
  [
    'id' => $data['tip_id'],
  ]
);
setSuccessMessage('Tip has been disapproved successfully!');
redirect('/dashboard');