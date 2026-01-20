<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../app/Core/Controller.php';


$router = new Router();
$router->display();



?>