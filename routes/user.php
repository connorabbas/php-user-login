<?php

use App\MVC\Controllers\UserController;

// Valid Routes for Site

$router->get('/account', [UserController::class, 'index']);
$router->post('/update-name', [UserController::class, 'store']);
