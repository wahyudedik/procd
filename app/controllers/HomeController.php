<?php

// app/controllers/HomeController.php

class HomeController {
    public function index() {
        // Load model
        $userModel = new UserModel();
        
        // Get data from model
        $users = $userModel->getUsers();
        
        // Pass data to view
        include '../app/views/home.php';
    }
}
