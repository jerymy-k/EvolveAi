<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\PlanRepository;

class PlanService{
    // private $planRepository;
    // private $taskRepository;

    public function getTodayPlan($userId){
        $planRepo = new PlanRepository();
        return  $planRepo->findTodayByUser($userId);
        }
    public function generateDailyPlan($userId){}
    public function reevaluatePlan($DailyPlan){}
    public function archiveAndGenerateNewPlan($DailyPlan){}
    

}