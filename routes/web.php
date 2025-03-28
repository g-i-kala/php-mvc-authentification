<?php

use App\Database;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    require_once __DIR__ . '/../app/views/layout.php'; 
    exit();
} elseif ($uri === '/login') {
    require_once __DIR__ . '/../app/views/login.php'; 
    exit();
} elseif ($uri === '/register') {
    require_once __DIR__ . '/../app/views/register.php'; 
    exit();
} elseif ($uri === '/dashboard') {
    require_once __DIR__ . '/../app/views/dashboard.php'; 
    exit();
} else {
    abort(404);
}


function abort($code = 404) {
    http_response_code($code);
    require_once __DIR__ . "/../app/views/{$code}.php";
    exit();
}