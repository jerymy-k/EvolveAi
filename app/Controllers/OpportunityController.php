<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\Ai\AiService;
use App\Services\OpportunityService;
use App\Repositories\OpportunityRepository;
use App\Core\Database;

class OpportunityController extends Controller
{
    private OpportunityRepository $opportunityRepository;
    private OpportunityService $opportunityService;

    public function __construct()
    {
        $pdo = Database::getInstance()->getConnection();
        $this->opportunityRepository = new OpportunityRepository($pdo);
        $this->opportunityService = new OpportunityService($this->opportunityRepository);
    }

    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $userId = $_SESSION['user_id'];


        $surveyResponses = $this->opportunityRepository->getsurveyResponses($userId);

        $existingOpportunities = $this->opportunityRepository->getOpportunityByUserID($userId);

        $this->view('opportunities/index', [
            'surveyResponses' => $surveyResponses,
            'opportunities' => $existingOpportunities,
            'userId' => $userId
        ]);
    }

    public function generateFromSurvey()
    {
        header('Content-Type: application/json; charset=utf-8');

        if (!isset($_SESSION['user_id'])) {
            http_response_code(401);
            echo json_encode(['error' => 'Please log in to generate opportunities.']);
            return;
        }

        $userId = $_SESSION['user_id'];

        try {

            $surveyResponses = $this->opportunityRepository->getsurveyResponses($userId);

            if (empty($surveyResponses)) {
                http_response_code(404);
                echo json_encode(['error' => 'No survey responses found. Please complete the survey first.']);
                return;
            }
            $survey = $surveyResponses[0];

            $opportunities = \App\Services\Ai\AiService::generateOpportunitiesFromSurvey($survey);

            echo json_encode([
                'status' => 'success',
                'count' => count($opportunities),
                'opportunities' => $opportunities
            ]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                'error' => 'Failed to generate opportunities',
                'message' => $e->getMessage()
            ]);
        }
    }
}
