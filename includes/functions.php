<?php

/**
 * Debugging function.
 */
function dd($data, $die = true) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  if ($die) {
    die();
  }
}

/**
 * Load view.
 */
function view($path, $method = 'GET', $data = []) {
  extract($data);
  switch ($method) {
    case 'POST':
    case 'DELETE':
      $directory = '/controllers/';
      break;
    default:
      $directory = '/views/';
      break;
  }

  require BASE_PATH . $directory . $path . '.php';
}

/**
 * Routing.
 */
function route($uri, $method = 'GET', $data = []) {
  $routes = [
    '/' => 'home',
    '/create-a-tip' => 'create-tip',
    '/post-tip' => 'post-tip',
    '/vote' => 'vote',
    '/admin/login' => 'admin-login',
    '/authenticate' => 'authenticate',
    '/dashboard' => 'dashboard',
    '/approve-tip' => 'approve-tip',
    '/disapprove-tip' => 'disapprove-tip',
  ];

  // Protect admin routes
  $protected_routes = [
    '/dashboard',
    '/approve-tip',
    '/disapprove-tip',
  ];
  if (in_array($uri, $protected_routes) && !isAdmin()) {
    http_response_code(404);
    view('404');
    return;
  }

  // Review request for upvote/downvote.
  if ($uri === '/vote' && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect();
    return;
  }

  if (array_key_exists($uri, $routes)) {
    view($routes[$uri], $method, $data);
  } else {
    view('404');
  }
}

/**
 * Redirect.
*/
function redirect($path = '/') {
  header("location: {$path}");
  exit();
}

/**
 * session.
 */
function setSession($key, $value) {
  $_SESSION[$key] = $value;
}

function getSession($key) {
  return $_SESSION[$key];
}

function deleteSession($key) {
  unset($_SESSION[$key]);
}

function setSuccessMessage($msg) {
  $_SESSION['msg-success'][] = $msg;
}

function setErrorMessage($msg) {
  $_SESSION['msg-error'][] = $msg;
}

function getErrorMessages() {
  return $_SESSION['msg-error'] ?? [];
}

/**
 * Get template
 */
function getTemplate($path, $args = []) {
  extract($args);
  return require BASE_PATH . '/templates/' . $path . '.php';
}

/**
 * Get CSS
 */
function renderCSS($css_file, $condition = true, $local = true) {
  $markup = '<link rel="stylesheet" href="' . ROOT . '/css/' . $css_file;

  // Add query string for versioning if css is local
  if ($local) {
    $markup .= '?v=' . ASSET_VERSION;
  }

  $markup .= '">' . PHP_EOL;
  return $condition ? $markup : '';
}

/**
 * Get JS
 */
function renderJS($js_file, $condition = true, $local = true) {
  $markup = '<script src="' . ROOT . '/js/' . $js_file . '.js';

  // Add query string for versioning if js is local
  if ($local) {
    $markup .= '?v=' . ASSET_VERSION;
  }

  $markup .= '"></script>' . PHP_EOL;
  return $condition ? $markup : '';
}

/**
 * Get current URL
 */
function currentURLIs($url) {
  if (empty($url)) {
    return FALSE;
  }
  return $_SERVER['REQUEST_URI'] === $url;
}

function isCurrentPage($value) {
  return $_SERVER['REQUEST_URI'] === $value;
}

/**
 * Auth
 */
function isAdmin(): bool {
  return isset($_SESSION['user']['usertype']) && $_SESSION['user']['usertype'] === 'admin';
}