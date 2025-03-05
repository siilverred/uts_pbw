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

        $userId = AuthMiddleware::getUserId();
        $isAdmin = $_SESSION['user_role'] === 'admin';

        if ($isAdmin) {
            $donations = $this->donationModel->getAll(); // Admin melihat semua data
        } else {
            $donations = $this->donationModel->getByUserId($userId); // User hanya melihat data miliknya
        }

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
