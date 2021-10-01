<?php

namespace app\controllers;
use app\Router;

class ProductController {
  public function index(Router $router){
    $search = $_GET['search'] ?? '';

    $products = $router->db->getProducts($search);
    return $router->renderView('products/index',[
      'products' => $products,
      'search' => $search
    ]);
  }

  public function create(Router $router){
    $errors = [];

    $productData = [
      'title' => '',
      'description' => '',
      'image' => '',
      'price' => 0.00
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      $productData['title'] = $_POST['title'];
      $productData['title'] = $_POST['title'];
      $productData['title'] = $_POST['title'];
      $productData['title'] = $_POST['title'];
      $productData['title'] = $_POST['title'];
    }

    return $router->renderView('products/create', [
      'product' => $productData,
      'error' => $errors
    ]);
  }

  public function update(Router $router){
    return $router->renderView('products/update');
  }

  public function delete(Router $router){
    echo "Delete page";
  }
}


?>