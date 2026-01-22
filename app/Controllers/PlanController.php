<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Services\PlanService;



class PlanController extends Controller{

    public function showTodayPlan(){
        $userId = $_SESSION['user_id'];
        $planService = new PlanService();
     $this->view('dashboard/index' ,[
        'plan' => $planService->getTodayPlan($userId)
     ]);
    }
    public function generateTodayPlan($id){
       $planService = new PlanService();
     $this->view('dashboard/index' ,[
        'plan' => $planService->getTodayPlan($id)
     ]);
    }
    public function reevaluatePlan(){}
    public function showHistory(){}



    
    
    

}
?>