<?php

namespace App;

class Router {
  protected array $routes = [];
  protected array $protected_methods = [
    'POST',
    'DELETE'
  ];

  public function add($method, $uri, $tpl)
  {
    $this->routes[] = [
      'uri' => $uri,
      'method' => $method,
      'template' => $tpl,
    ];
  }

  public function route($uri, $method)
  {
    $path = '/views/';

    foreach ($this->routes as $route) {
      if (in_array($method, $this->protected_methods)) {
        $path = '/controllers/';
      }

      if ($route['uri'] === $uri && $route['method'] === $method) {
        return require BASE_PATH . $path . $route['template'] . '.php';
      }
    }

    http_response_code(404);
    return require BASE_PATH . $path . '404' . '.php';
  }
}