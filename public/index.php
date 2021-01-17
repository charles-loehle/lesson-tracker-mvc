<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use app\Router;
use app\controllers\StudentController;

$router = new Router();

$router->get('/', [StudentController::class, 'index']);
$router->get('/students', [StudentController::class, 'index']);
$router->get('/students/create', [StudentController::class, 'create']);
$router->post('/students/create', [StudentController::class, 'create']);
$router->get('/students/update', [StudentController::class, 'update']);
$router->post('/students/update', [StudentController::class, 'update']);
$router->post('/students/delete', [StudentController::class, 'delete']);

// detect current route and execute the corresponding function 
$router->resolve();