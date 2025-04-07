<?php

$router->get('/', 'app/controllers/index.php');
$router->get('/about', 'app/controllers/about.php');
$router->get('/contact', 'app/controllers/contact.php');

$router->get('/notes', 'app/controllers/notes/index.php');
$router->get('/note', 'app/controllers/notes/show.php');
$router->delete('/note', 'app/controllers/notes/destroy.php');
$router->get('/notes/create', 'app/controllers/notes/create.php');

$router->get('/login', 'app/views/login.view.php');
$router->get('/register', 'app/views/register.view.php');
$router->get('/dashboard', 'app/views/dashboard.view.php');
$router->get('/logout', 'app/views/logout.view.php');
