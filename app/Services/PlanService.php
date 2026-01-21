<?php

class PlanService{
    private $planRepository;
    private $taskRepository;

    public function getTodayPlan($userId){}
    public function generateDailyPlan($userId){}
    public function reevaluatePlan($DailyPlan){}
    public function archiveAndGenerateNewPlan($DailyPlan){}

}