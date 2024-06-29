<?php 
namespace App\Features\GetTasks;

use App\Infrastructure\Database;

class TaskRepository {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->getConnection()->query("SELECT * FROM tasks");
        $tasks = [];
        while ($row = $stmt->fetch()) {
            $tasks[] = new Task($row['id'], $row['title'], $row['description']);
        }
        return $tasks;
    }
}
