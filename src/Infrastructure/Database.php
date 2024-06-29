<?php 
namespace App\Infrastructure;

use PDO;

class Database {
    private $connection;

    public function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}
