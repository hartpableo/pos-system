<?php

use App\Database;

session_start();

require_once 'env.php';
require_once 'config.php';
require_once 'includes/index.php';

$db = new Database();

// Enable debug
DEBUG_ENABLED ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

// Document.
require 'header.php';

// @see includes/routes.php
$router->route($uri, $method);

require 'footer.php';

// Unset sessions.
deleteSession('msg-success');
deleteSession('msg-error');
