<?php
namespace App\Services;

use App\Repositories\QuestionnaireRepository;

class QuestionnaireService {
    public function handleSurvey($data) {
    $requiredFields = [
        'age_range', 
        'main_goal', 
        'specific_skills', 
        'used_device', 
        'employment_status', 
        'work_schedule', 
        'ai_familiarity', 
        'daily_time_investment'
    ];
    
    foreach ($requiredFields as $field) {
        if (!isset($data[$field])) {
            return ['success' => false, 'message' => "Field {$field} is missing from request."];
        }

        if ($field === 'specific_skills') {
            if (!is_array($data[$field]) || count($data[$field]) === 0) {
                return ['success' => false, 'message' => "Please select at least one skill."];
            }
        } else {
            if (trim((string)$data[$field]) === '') {
                return ['success' => false, 'message' => "Field {$field} cannot be empty."];
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