<?php 
    namespace App\Services;

    use App\Repositories\QuestionnaireRepository;

    class QuestionnaireService{
        public function handleSurvey($data){
            extract($data);
        }
    }