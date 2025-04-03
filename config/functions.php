<?php

use App\Config\Response;

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($variable) {
    echo '<pre>'; // For better formatting
    var_dump($variable);
    echo '</pre>';
    die(); // Terminate the script
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(! $condition) {
        abort($status);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($viewName, $attributes =[]) {
    extract($attributes);
    require base_path("app/views/" . $viewName);
}

