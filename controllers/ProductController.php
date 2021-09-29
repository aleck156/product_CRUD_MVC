<?php

namespace app\controllers;
use app\Router;

class ProductController {
  public function index(Router $router){
    $search = $_GET['search'] ?? '';

    $products = $router->db->getProducts($search);
    return $router->renderView('products/index',[
      'products' => $products
    ]);
  }

  public function create(Router $router){
    return $router->renderView('products/create');
  }

  public function update(Router $router){
    return $router->renderView('products/update');
  }

  public function delete(Router $router){
    echo "Delete page";
  }
}


?>