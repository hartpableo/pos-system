<?php

use App\Router;

$router = new Router();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];
if (isset($_POST['_method'])) {
  $method = $_POST['_method'];
}

$router->add('GET', '/', 'home');

// Dashboard
$router->add('GET', '/dashboard/add-item', 'dashboard/add-item');
