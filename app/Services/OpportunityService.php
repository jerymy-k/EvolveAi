<?php

namespace App\Services;

use App\Repositories\OpportunityRepository;
use App\Models\Opportunity;

class OpportunityService
{
    private OpportunityRepository $opportunityRepository;

    public function __construct(OpportunityRepository $opportunityRepository)
    {
        $this->opportunityRepository = $opportunityRepository;
    }

    public function generate($qaPairs)
    {
        $opportunities = [];
        foreach ($qaPairs as $pair) {
            $question = $pair['question'] ?? '';
            $answer = $pair['answer'] ?? $pair; 

            $opportunity = new Opportunity($question, $answer);
            $opportunities[] = $opportunity;
        }
        return $opportunities;
    }

    public function createOpportunity(Opportunity $opportunity)
    {
        return $this->opportunityRepository->create($opportunity);
    }

    public function createOpportunities(array $opportunities)
    {
        foreach ($opportunities as $opportunity) {
            $this->createOpportunity($opportunity);
        }
    }
}
