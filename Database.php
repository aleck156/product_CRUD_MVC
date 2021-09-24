<?php

namespace app;

use PDO;
class Database {

  public \PDO $pdo;

  public function __construct()
  {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}

?>