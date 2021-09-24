<?php

namespace app;

class Router{
  public array $getRoutes = [];
  public array $postRoutes = [];
  public ?Database $db = null;

  public function __construct(Database $database)
  {
    $this->db = $database;
  }

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
    call_user_func($fn, $this);
  }

  public function renderView($view, $params = [])
  {
    ob_start(); // start caching of the output, saved in a local buffer
    include_once __DIR__."/views/$view.php";
    $content = ob_get_clean();
    include_once __DIR__."/views/_layout.php";
  }
}


?>