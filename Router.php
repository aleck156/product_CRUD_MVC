<?php

namespace app;

class Router{
  public array $getRoutes = [];
  public array $postRoutes = [];

  public function get($url, $fn){
    $this->getRouter[$url] = $fn;
  }

  public function post($url, $fn){
    $this->postRoutes[$url] = $fn;
  }

  public function resolve(){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>"."\n<br>";
  }
}


?>