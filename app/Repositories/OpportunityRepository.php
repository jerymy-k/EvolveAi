<?php

namespace App\Repositories;

use App\Models\Opportunity;
use PDO;

class OpportunityRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($opportunity)
    {
        $sql = "INSERT INTO opportunities 
                (user_id, title, description, required_skill, money_gain, link, status) 
                VALUES 
                (:userid, :title, :description, :required_skill, :money_gain, :link, :status)";

        $stmt = $this->pdo->prepare($sql);

        $skills = $opportunity->getSkills();
        $skillsString = is_array($skills) ? implode(', ', $skills) : $skills;

        $stmt->execute([
            ":userid"         => $opportunity->getUserId(),
            ":title"          => $opportunity->getTitle(),
            ":description"    => $opportunity->getDescription(),
            ":required_skill" => $skillsString,
            ":money_gain"     => $opportunity->getPossibleGain(),
            ":link"           => $opportunity->getLink(),
            ":status"         => $opportunity->getStatus()
        ]);
    }

    public function getOpportunityByUserID($userid)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM opportunities WHERE user_id = :userid");

        $stmt->execute([
            ':userid' => $userid
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getsurveyResponses($userid){
        
        $stmt = $this->pdo->prepare("SELECT * FROM survey_responses WHERE user_id = :userid");

        $stmt->execute([
            ':userid' => $userid
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
