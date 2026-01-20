<?php

class Router
{
    public function display()
    {
        $url = filter_var($_GET['path'] ?? 'auth', FILTER_SANITIZE_URL);
        $url = explode("/", trim($url, "/"));

        $controllerName = ucfirst(array_shift($url)) . "Controller";
        $method = array_shift($url) ?? "index";
        $params = $url;
        $controllerPath = "../app/Controllers/$controllerName.php";
        echo $controllerPath;

        require_once $controllerPath;

        // if (!class_exists($controllerName)) {
        //     require_once __DIR__ . "/../app/Controllers/NotfoundController.php";
        //     $error = new NotfoundController();
        //     $error->index();
        //     return;
        // }

        echo $controllerName;
        $controller = new $controllerName();

        if (!method_exists($controller, $method)) {
            require_once __DIR__ . "/../app/Controllers/NotfoundController.php";
            $error = new NotfoundController();
            $error->index();
            return;
        }
        if (!empty($params)) {
            call_user_func_array([$controller, $method], $params);
        } else {
            $controller->$method();
        }

    }
}