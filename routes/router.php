<?php

$routes = require __DIR__ . '/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require_once __DIR__ . $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code); 

    $viewPath = __DIR__ . "/../app/views/{$code}.php";
   
    if (file_exists($viewPath)) {
        require_once $viewPath; 
    } else {
        require_once __DIR__ . '/../app/views/500.php'; 
    }

    exit();
}

routeToController($uri, $routes);