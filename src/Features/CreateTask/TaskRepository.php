<?php 
namespace App\Features\CreateTask;

use App\Infrastructure\Database;

class TaskRepository {
    private Database $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function save(Task $task) {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
        $stmt->bindParam(':title', $task->title);
        $stmt->bindParam(':description', $task->description);
        $stmt->execute();
    }
}
