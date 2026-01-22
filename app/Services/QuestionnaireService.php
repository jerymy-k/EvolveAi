<?php
namespace App\Services;

use App\Repositories\QuestionnaireRepository;

class QuestionnaireService {
    public function handleSurvey($data) {
    $requiredFields = [
        'age_range', 
        'main_goal', 
        'used_device', 
        'employment_status', 
        'work_schedule', 
        'ai_familiarity', 
        'daily_time_investment'
    ];
    
    foreach ($requiredFields as $field) {
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return ['success' => false, 'message' => "Field {$field} is required."];
            }
        }
    }

    $repo = new QuestionnaireRepository();
    $isSaved = $repo->saveAnswers($data);

    return [
        'success' => $isSaved, 
        'message' => $isSaved ? 'Success!' : 'Database error occurred while saving.'
    ];
}
}