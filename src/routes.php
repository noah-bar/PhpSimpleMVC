<?php
namespace App;

use App\Router\Router;
use App\Controllers\TodoController;

$router = new Router();

$router->get('/', TodoController::class , 'index');

$router->dispatch();