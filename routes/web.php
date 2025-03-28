<?php

use App\Database;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => '/../app/views/layout.view.php',
    '/login' => '/../app/views/login.view.php',
    '/register' => '/../app/views/register.view.php',
    '/dashboard' => '/../app/views/dashboard.view.php',
    '/logout' => '/../app/views/logout.view.php'
];

routeToController($uri, $routes);


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require_once __DIR__ . $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require_once __DIR__ . "/../app/views/{$code}.php";
    exit();
}