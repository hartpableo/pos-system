<?php

namespace App;

use PDO;

class Database {
  private PDO $connection;

  public function __construct() {
    $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8mb4';
    $this->connection = new PDO($dsn, DBUSER, DBPASS, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function findAll($query, $params = []) {
    $custom_query = $this->connection->prepare($query);
    $custom_query->execute($params);
    return $custom_query->fetchAll();
  }

  public function find($query, $params = []) {
    $custom_query = $this->connection->prepare($query);
    $custom_query->execute($params);
    return $custom_query->fetch();
  }

  public function query($query, $params = []) {
    $custom_query = $this->connection->prepare($query);
    return $custom_query->execute($params);
  }
}