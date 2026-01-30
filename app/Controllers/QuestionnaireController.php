<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;


class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $pdo = Database::getInstance()->getConnection();
    }

    public function index(): void
    {
        $this->redirect('/questionnaire/questionnaire');
    }

    public function questionnaire()
    {
        $this->view('profile.questionnaire');
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

        $service = new \App\Services\QuestionnaireService();
        $result = $service->handleSurvey($data);

        header('Content-Type: application/json');
        echo json_encode($result);
        exit; 
    }
}
