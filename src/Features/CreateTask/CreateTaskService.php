<?php
namespace App\Features\CreateTask;

class CreateTaskService {
    private TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository) {
        $this->taskRepository = $taskRepository;
    }

    public function execute(CreateTaskRequest $request): void {
        $task = new Task($request->title, $request->description);
        $this->taskRepository->save($task);
    }
}
