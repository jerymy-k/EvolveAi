<?php 
    namespace App\Controllers;

    use App\Core\Controller;
    use App\Core\Database;
    
    class QuestionnaireController extends Controller{
        public function __construct()
        {
            $pdo = Database::getInstance()->getConnection();
        }
        
        public function index(): void
        {
            $this->redirect('/questionnaire/questionnaire');
        }
        
        public function questionnaire(){
            $this->view('profile.questionnaire');
        }
    }