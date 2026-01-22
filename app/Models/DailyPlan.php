<?php
namespace App\Models;
class DailyPlan
{
    private $id;
    private $opportunityId;
    private $userId;
    private $title;
    private $goal;
    private $aimedSkills; 
    private $startDate;
    private $endDate;
    private $status;

    public function __construct(
        $opportunityId,
        $userId,
        $title,
        $goal,
        array $aimedSkills,
        $startDate,
        $endDate,
        $status = 'active'
    ) {
        $this->opportunityId = $opportunityId;
        $this->userId = $userId;
        $this->title = $title;
        $this->goal = $goal;
        $this->aimedSkills = $aimedSkills;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = $status;
    }

    
    public function getOpportunityId() { return $this->opportunityId; }
    public function getUserId() { return $this->userId; }
    public function getTitle() { return $this->title; }
    public function getGoal() { return $this->goal; }
    public function getAimedSkills() { return $this->aimedSkills; }
    public function getStartDate() { return $this->startDate; }
    public function getEndDate() { return $this->endDate; }
    public function getStatus() { return $this->status; }
}
