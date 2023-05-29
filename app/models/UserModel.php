<?php

// app/models/UserModel.php

class UserModel {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getUsers() {
        $pdo = $this->db->connect();
        $stmt = $pdo->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
