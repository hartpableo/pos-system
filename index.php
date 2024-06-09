<?php

use App\Database;

session_start();

require_once 'env.php';
require_once 'config.php';
require_once 'includes/index.php';

$db = new Database();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];
if (isset($_POST['_method'])) {
  $method = $_POST['_method'];
}

// Document.
require 'header.php';
route($uri, $method);
require 'footer.php';

// Unset sessions.
deleteSession('msg-success');
deleteSession('msg-error');
