<?php

// core/Database.php

class Database {
    private $config;
    private $conn;

    public function __construct() {
        $this->config = require '../config/database.php';
        $this->conn = $this->connect();
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->config['host']};dbname={$this->config['dbname']}";
            $pdo = new PDO($dsn, $this->config['username'], $this->config['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
