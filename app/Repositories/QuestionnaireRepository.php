<?php

namespace App\Repositories;

use App\Core\Database;

class QuestionnaireRepository
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function saveAnswers($data)
    {
        $interestAreas = !empty($data['interest_areas'])
            ? '{' . implode(',', $data['interest_areas'])  .'}'
            : '{}';
        $sql = "INSERT INTO survey_responses (user_id, age_range, main_goal, interest_areas, used_device, employment_status, current_career, previous_career, work_schedule, ai_confidence, daily_time_investment) 
                VALUES (:user_id, :age_range, :main_goal, :interest_areas, :used_device, :employment_status, :current_career, :previous_career, :work_schedule, :ai_confidence, :daily_time_investment)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':user_id'               => $_SESSION['user_id'],
            ':age_range'             => $data['age_range'],
            ':main_goal'             => $data['main_goal'],
            ':interest_areas'        => $interestAreas,
            ':used_device'           => $data['used_device'],
            ':employment_status'     => $data['employment_status'],
            ':current_career'        => $data['current_career'],
            ':previous_career'       => $data['previous_career'],
            ':work_schedule'         => $data['work_schedule'],
            ':ai_confidence'         => $data['ai_familiarity'],
            ':daily_time_investment' => $data['daily_time_investment'],
        ]);
    }
}
