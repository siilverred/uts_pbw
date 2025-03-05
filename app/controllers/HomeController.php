HomeController.php

<?php
class HomeController
{
    private $db;
    private $donationModel;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'app/models/Saving.php';
        $this->donationModel = new Saving($this->db);
    }

    public function index()
    {
        require_once 'app/helpers/AuthMiddleware.php';
        AuthMiddleware::isAuthenticated();

        $donations = $this->donationModel->getAll();
        $isAdmin = $_SESSION['user_role'] === 'admin';
        require_once 'app/views/home.php';
    }

    public function admin()
    {
        require_once 'app/helpers/AuthMiddleware.php';
        AuthMiddleware::isAdmin();

        require_once 'app/models/User.php';
        $userModel = new User($this->db);
        $users = $userModel->getAllUsers();
        $donations = $this->donationModel->getAll();
        require_once 'app/views/admin.php';
    }
}
