<?php

echo "connected";

require_once __DIR__."/../vendor/autoload.php";

use app\Router;
use app\controllers\ProductController;

$router = new Router();
$router->get('/', [ProductController::class, 'index']);
$router->get('/', [ProductController::class, 'index']);
$router->get('/', [ProductController::class, 'index']);
$router->get('/', [ProductController::class, 'index']);
?>