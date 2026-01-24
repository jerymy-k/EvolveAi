<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    public function __construct()
    {
        $pdo = Database::getInstance()->getConnection();
    }

    public function index(): void
    {
        $this->redirect('/profile/profile');
    }

    public function profile()
    {
        $user_id = $_SESSION['user_id'] ?? '';
        $service = new ProfileService();
        $userData = $service->getUserDataById($user_id);
        $this->view('profile.profile', ['userData' => $userData]);
    }

    public function edit_profile(){
        $user_id = $_SESSION['user_id'] ?? '';
        
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        
        if (!$data) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'No data received']);
            exit;
            }
            
        $service = new ProfileService();
        $result = $service->edit_profile($user_id);

        header('Content-Type: application/json');
        echo json_encode($result);
        exit; 
    }
    
    public function changeUserData(){
        $json = file_get_contents('php://input');
    }

    public function submit(): void
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if (!$data) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'No data received']);
            exit;
        }

        $service = new ProfileService();
        $result = $service->handleSurvey($data);

        header('Content-Type: application/json');
        echo json_encode($result);
        exit; 
    }
}
