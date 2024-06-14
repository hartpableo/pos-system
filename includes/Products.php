<?php

namespace App;

class Products extends Database {
  public function getAllProducts() {
    return $this->findAll('SELECT * FROM products');
  }
}