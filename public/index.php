<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/routes.php';

use webversal\app\App\Router\router;

foreach(getRoutes() as $route){
    router::add($route['method'], $route["path"], $route['controller'], $route["function"], $route["middlewares"]);
}

router::run();