<?php
namespace App\Features\CreateTask;

class Task {
    public function __construct(
    public string $title,
    public string $description) 
    {}
}

