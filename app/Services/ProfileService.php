<?php

namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{
    public function getUserDataById($user_id)
    {
        $repo = new ProfileRepository();
        $userData = $repo->getUserData($user_id);

        $userData['interest_areas'] = $this->parsePostgresArray($userData['interest_areas']);

        $userData = array_map(
            function ($item) {
                if (is_string($item))
                    return ucwords(str_replace('_', ' ', $item));
                return $item;
            },
            $userData
        );

        return $userData;
    }

    private function parsePostgresArray($postgresStr)
    {
        if (empty($postgresStr) || $postgresStr === '{}') {
            return [];
        }

        return array_map(function ($item) {
            return trim($item, '" ');
        }, explode(',', trim($postgresStr, '{}')));
    }

    public function edit_profile($user_id, $data)
    {
        $requiredFields = [
            'user_name',
            'email'
        ];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return ['success' => false, 'message' => "Field $field is required"];
            }
        }

        $repo = new ProfileRepository();
        $isSaved = $repo->edit_profile($data);

        return [
            'success' => $isSaved,
            'message' => $isSaved ? 'Success!' : 'Database error.'
        ];
    }

    public function handleSurvey($data)
    {
        $requiredFields = [
            'age_range',
            'main_goal',
            'interest_areas',
            'used_device',
            'employment_status',
            'current_career',
            'previous_career',
            'work_schedule',
            'ai_familiarity',
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
