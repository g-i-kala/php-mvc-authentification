<?php

$router->get('/','app/controllers/index.php');
$router->get('/about','../app/controllers/about.php');


// return [
//     '/' => '/../app/controllers/index.php',
//     '/about' => '/../app/controllers/about.php',
//     '/contact' => '/../app/controllers/contact.php',
//     '/notes' => '/../app/controllers/notes/index.php',
//     '/note' => '/../app/controllers/notes/show.php',
//     '/notes/create' => '/../app/controllers/notes/create.php',
//     '/login' => '/../app/views/login.view.php',
//     '/register' => '/../app/views/register.view.php',
//     '/dashboard' => '/../app/views/dashboard.view.php',
//     '/logout' => '/../app/views/logout.view.php'
// ];
