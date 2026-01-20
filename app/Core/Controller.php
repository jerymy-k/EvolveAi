<?php

class Controller{

public function view($path,$data = []){
    extract($data);
    require "../app/Views/" . $path . ".php";
}
}