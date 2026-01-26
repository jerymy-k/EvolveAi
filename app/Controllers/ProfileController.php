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
        $user_id = $_SESSION['user_id'] ?? null;
        $service = new ProfileService();
        $userData = $service->getUserDataById($user_id);
        $this->view('profile.profile', ['userData' => $userData]);
    }

    public function edit_profile()
    {
        $user_id = $_SESSION['user_id'] ?? null;

        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        if (!$data) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'No data received']);
            exit;
        }

        $service = new ProfileService();
        $result = $service->edit_profile($user_id, $data);

        if ($result['success']) {
            if (isset($data['user_name'])) {
                $_SESSION['user_name'] = $data['user_name'];
            }
            if (isset($data['email'])) {
                $_SESSION['user_email'] = $data['email'];
            }
        }

        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    }

    public function edit_data(): void
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if (!$data) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'No data received']);
            exit;
        }

        $service = new ProfileService();
        $result = $service->handleDataChange($data);

        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    }
}
