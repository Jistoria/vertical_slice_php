<?php 
namespace App\Features\GetTasks;

class GetTasksService {
    private $repository;

    public function __construct(TaskRepository $repository) {
        $this->repository = $repository;
    }

    public function execute() {
        return $this->repository->getAll();
    }
}