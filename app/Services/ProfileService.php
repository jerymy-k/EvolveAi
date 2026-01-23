<?php
namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{
    public function handleSurvey($data) {
    $requiredFields = [
        'age_range', 'main_goal', 'interest_areas', 
        'used_device', 'employment_status', 'current_career', 
        'previous_career', 'work_schedule', 'ai_familiarity', 
        'daily_time_investment'
    ];

    $sanitizedData = [];

    foreach ($requiredFields as $field) {
        if (!isset($data[$field]) || (is_string($data[$field]) && trim($data[$field]) === '')) {
            return ['success' => false, 'message' => "Field {$field} is required."];
        }

        if (is_array($data[$field])) {
            $sanitizedData[$field] = array_map(fn($item) => strip_tags(trim($item)), $data[$field]);
        } else {
            $sanitizedData[$field] = strip_tags(trim($data[$field]));
        }
    }

    $repo = new ProfileRepository();
    $isSaved = $repo->saveAnswers($sanitizedData);

    return [
        'success' => $isSaved, 
        'message' => $isSaved ? 'Success!' : 'Database error.'
    ];
}
}