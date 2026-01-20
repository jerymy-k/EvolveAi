<?php 
    class QuestionnaireController{
        public function __construct()
        {

        }

        public function showQuestionnaire(){
            $pageTitle = "profile";

            ob_start();
            include  "../app/Views/profile/questionnaire.php";
            
            $content = ob_get_clean();
            }
    }