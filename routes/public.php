<?php

use App\Controllers\ExampleController;

// Valid Routes for Site

$router->view('/', 'pages/welcome');
$router->view('/login', 'pages/login');

$router->get('/json', function() {
    echo json_encode(
        ['foo' => 'bar']
    );
});

$router->get('/example', [ExampleController::class, 'index']);
