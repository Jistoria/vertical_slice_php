<?php 
namespace App\Infrastructure;

use Slim\Factory\AppFactory;

class Router {
    public function setup() {
        $app = AppFactory::create();

        $app->get('/', function ($request, $response, $args) {
            ob_start();
            include '../src/Infrastructure/Views/home.php';
            $output = ob_get_clean();
            $response->getBody()->write($output);
            return $response;
        });
        $app->get('/tasks/create', function ($request, $response, $args) {
            ob_start();
            include '../src/Infrastructure/Views/tasks/create.php';
            $output = ob_get_clean();
            $response->getBody()->write($output);
            return $response;
        });

        

        // Ruta para obtener las tareas
        $app->get('/tasks', \App\Features\GetTasks\GetTasksController::class);

        // Ruta para crear una tarea
        $app->post('/tasks/create', \App\Features\CreateTask\CreateTaskController::class);

        

        return $app;
    }
}

