<?php

namespace App\Repositories;

use App\Core\Database;
use PDO;

class PlanRepository
{
    public function findTodayByUser(int $userId): ?array
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->prepare(
            "SELECT * FROM ai_plans WHERE user_id = ? AND status = 'active' "
        );
        $stmt->execute([$userId]);
        return   $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
        
    }



    // public function findById($id){
    //     $db = Database::getInstance()->getConnection();

    //     $stmt = $db->prepare(
    //         "SELECT * FROM ai_plans WHERE id = ? "
    //     );
    //     $stmt->execute([$userId]);
    //     return   $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    // }


//     public function findArchivedByUser($userId){
//     $db = Database::getConnection();    
//     $stmt = $db->prepare("SELECT * FROM ai_plans WHERE user_id = ? AND status = 'active' ");
//     $stmt->execute([$userId]);
//     return $stmt->fetch(PDO::FETCH_ASSOC);
//     }
 public function save($plan)
    {
        $db = Database::getInstance()->getConnection();
        $sql = " INSERT INTO ai_plans (opportunity_id, user_id, title, goal, aimed_skills, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            $plan->getOpportunityId(),
            $plan->getUserId(),
            $plan->getTitle(),
            $plan->getGoal(),
            json_encode($plan->getAimedSkills()), // array → json
            $plan->getStartDate(),
            $plan->getEndDate(),
            $plan->getStatus()
        ]);

        
    }
//     public function archive($planId){}
}