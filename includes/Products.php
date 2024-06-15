<?php

namespace App;

class Products extends Database {
  public function getAllProducts() {
    return $this->findAll('SELECT * FROM products');
  }

  public function findProductById($id) {
    return $this->find('SELECT * FROM products WHERE id = :id', [':id' => $id]);
  }

  public function getProductVariants($id) {
    $product = $this->findProductById($id);
    return json_decode($product['variants'], true);
  }
}