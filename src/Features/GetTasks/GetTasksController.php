<?php 
namespace App\Features\GetTasks;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class GetTasksController {
    private $service;

    public function __construct() {
        $this->service = new GetTasksService(new TaskRepository(new \App\Infrastructure\Database()));
    }

    public function __invoke(Request $request, Response $response): Response {
        $tasks = $this->service->execute();
    
        // Inicia la captura de salida
        ob_start();
        
        // Incluye la vista específica y pasa los datos de tasks
        include '../src/Infrastructure/Views/tasks/list.php';
        
        // Obtiene el contenido capturado y limpia el buffer
        $output = ob_get_clean();
    
        // Devuelve la respuesta con el contenido de la vista
        $response->getBody()->write($output);
        return $response->withHeader('Content-Type', 'text/html');
    }
    
}
