<?php 
use App\Core\Controller;
class NotfoundController extends Controller {

 public function index(){
   $this->view('error/404');
 }
}