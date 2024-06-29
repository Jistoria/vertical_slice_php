<?php 
namespace App\Features\CreateTask;

use App\Infrastructure\Database;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class CreateTaskController
 * 
 * This class is responsible for handling the creation of a task.
 */
class CreateTaskController {
    private $service;

    /**
     * CreateTaskController constructor.
     * 
     * Initializes the CreateTaskController object and sets the service.
     */
    public function __construct() {
        $this->service = new CreateTaskService(new TaskRepository(new Database()));
    }

    /**
     * __invoke method
     * 
     * Handles the creation of a task.
     * 
     * @param Request $request The HTTP request object.
     * @param Response $response The HTTP response object.
     * @return Response The updated HTTP response object.
     */
    public function __invoke(Request $request, Response $response): Response {
        // Get the data from the request
        $data = $request->getParsedBody();
        // Create a new CreateTaskRequest object
        $taskRequest = new CreateTaskRequest($data['title'], $data['description']);
        $this->service->execute($taskRequest);

        $success = "Task created successfully!";
        // Start output buffering
        ob_start();
            include '../src/Infrastructure/Views/tasks/create.php';
        $output = ob_get_clean();
        // Write the output
        $response->getBody()->write($output);

        return $response->withHeader('Content-Type', 'text/html');
    }
}
