<?php

namespace app\controllers;
use app\Router;

class ProductController {
  public function index(Router $router){
    return $router->renderView('products/index');
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