<?php

namespace app;

class Router{
  public array $getRoutes = [];
  public array $postRoutes = [];

  public function get($url, $fn){
    $this->getRoutes[$url] = $fn;
  }

  public function post($url, $fn){
    $this->postRoutes[$url] = $fn;
  }

  public function resolve(){
    $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if ($method === 'get'){
      $fn = $this->getRoutes[$currentUrl] ?? null;
    } else {
      $fn = $this->postRoutes[$currentUrl] ?? null;
    }

    if (!$fn) {
      echo "404: Page not found!";
      exit;
    }
    call_user_func($fn);
  }

  public function renderView($view)
  {
    include_once __DIR__."/views/$view.php";
  }
}


?>