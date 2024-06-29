<?php 
namespace App\Features\CreateTask;

class CreateTaskRequest {
    public string $title;
    public string $description;

    public function __construct(string $title, string $description) {
        $this->title = $title;
        $this->description = $description;
    }
}
