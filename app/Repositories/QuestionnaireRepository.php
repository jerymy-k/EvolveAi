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
        $sql = "INSERT INTO survey_responses (user_id, age_range, main_goal, used_device, employment_status, work_schedule, ai_confidence, daily_time_investment) 
                VALUES (:user_id, :age_range, :main_goal, :used_device, :employment_status, :work_schedule, :ai_confidence, :daily_time_investment)";

        $stmt = $this->db->prepare($sql);

        $mainSaved = $stmt->execute([
            ':user_id'               => $_SESSION['user_id'],
            ':age_range'             => $data['age_range'],
            ':main_goal'             => $data['main_goal'],
            ':used_device'           => $data['used_device'],
            ':employment_status'     => $data['employment_status'],
            ':work_schedule'         => $data['work_schedule'],
            ':ai_confidence'         => $data['ai_familiarity'],
            ':daily_time_investment' => $data['daily_time_investment'],
        ]);

        if ($mainSaved && isset($data['specific_skills']) && is_array($data['specific_skills'])) {
            $skillSql = "INSERT INTO user_skills (user_id, skill_name) VALUES (:user_id, :skill_name)";
            $skillStmt = $this->db->prepare($skillSql);

            foreach ($data['specific_skills'] as $skill) {
                $skillStmt->execute([
                    ':user_id'    => $_SESSION['user_id'],
                    ':skill_name' => $skill
                ]);
            }
        }

        return $mainSaved;
    }
}
