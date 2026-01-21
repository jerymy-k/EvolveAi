<?php 

class TaskRepository{
    public function findByPlan($planId){}
    public function findById($taskId){}
    public function save($task){}
    public function updateStatus($taskId,$status){}
    public function countBlockedByPlan($planId){}

}