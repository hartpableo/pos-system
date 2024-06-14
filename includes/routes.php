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
$router->add('GET', '/dashboard', 'dashboard/main');
$router->add('GET', '/dashboard/sales-history', 'dashboard/sales-history');
$router->add('GET', '/dashboard/inventory', 'dashboard/inventory');
$router->add('GET', '/product/add', 'dashboard/add-product');
$router->add('GET', '/product/add/size', 'dashboard/add-product-size');

// Product
$router->add('POST', '/product/store', 'product/store');
$router->add('POST', '/product/size/store', 'product/sizes-store');
