<?php
    namespace App\Repositories;

    use App\Core\Database;

    class QuestionnaireRepository {
        protected $db;

        public function __construct() {
            $this->db = Database::getInstance()->getConnection();
        }

        public function saveAnswers($data) {
            $sql = "INSERT INTO survey_responses (age_range, goal, status, schedule, familiarity, time_spent) 
                    VALUES (:age, :goal, :status, :schedule, :fam, :time)";
            
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([
                ':age'      => $data['age_range'],
                ':goal'     => $data['main_goal'],
                ':status'   => $data['employment_status'],
                ':schedule' => $data['work_schedule'],
                ':fam'      => $data['ai_familiarity'],
                ':time'     => $data['daily_time_investment']
            ]);
        }
    }