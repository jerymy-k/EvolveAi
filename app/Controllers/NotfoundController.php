<?php 

class NotfoundController extends Controller {

 public function index(){
   $this->view('error/404');
 }
}