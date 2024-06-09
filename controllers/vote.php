<?php

use App\CSRFToken;
use App\Database;

$tokenizer = new CSRFToken();
$db = new Database();

// Submitted data
$data = [
  'csrf_token' => $_POST['csrf_token'],
  'tip_id' => $_GET['tip_id'],
  'vote_type' => $_POST['vote_type'],
  'voter_ip' => $_SERVER['REMOTE_ADDR'],
];

// Token validation
if (!$tokenizer->validateToken($data['csrf_token'])) {
  setErrorMessage('Sorry! Your request validation has failed. Please try again or contact us at ' . APP_EMAIL);
}

// Data validation
$tip = $db->find('SELECT * FROM tips WHERE id = :id', ['id' => $data['tip_id']]);
if (!$tip) {
  setErrorMessage('Sorry! The tip you are trying to ' . $data['vote_type'] . ' does not exist.');
}

if (!empty(getErrorMessages())) {
  redirect();
}

// Store IP address
$tip_ips = [];
if (!empty($tip['ip_addresses'])) {
  $tip_ips = json_decode($tip['ip_addresses'], TRUE);
}
// add the current voter's IP address to the list but prevent duplicates.
// must also save the type of vote they did (upvote or downvote).
$tip_ips[$data['voter_ip']] = $data['vote_type'];

// Count updated votes
$upvotes = count(array_filter($tip_ips, function ($vote) {
  return $vote === 'upvote';
}));
$downvotes = count(array_filter($tip_ips, function ($vote) {
  return $vote === 'downvote';
}));

// Update the tip with new vote counts and IP addresses
$db->query(
  'UPDATE tips 
     SET likes = :likes, dislikes = :dislikes, ip_addresses = :ip_addresses 
     WHERE id = :id',
  [
    'likes' => $upvotes,
    'dislikes' => $downvotes,
    'ip_addresses' => json_encode($tip_ips),
    'id' => $data['tip_id']
  ]
);

redirect();
