<?php

use Core\Router;
use Core\Response;

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($variable) {
    echo '<pre>'; 
    var_dump($variable);
    echo '</pre>';
    die(); 
}

function authorize($condition, $status = Response::FORBIDDEN, Router $router) {
    if(! $condition) {
        $router->abort($status);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($viewName, $attributes =[]) {
    extract($attributes);
    require base_path("app/views/" . $viewName);
}

