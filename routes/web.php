<?php
session_start();

use App\Database;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => '/../app/controllers/index.php',
    '/about' => '/../app/controllers/about.php',
    '/contact' => '/../app/controllers/contact.php',
    '/notes' => '/../app/controllers/notes.php',
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

    $viewPath = __DIR__ . "/../app/views/{$code}.php";
   
    if (file_exists($viewPath)) {
        require_once $viewPath; 
    } else {
        require_once __DIR__ . '/../app/views/500.php'; 
    }

    exit();
}

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($variable) {
    echo '<pre>'; // For better formatting
    var_dump($variable);
    echo '</pre>';
    die(); // Terminate the script
}