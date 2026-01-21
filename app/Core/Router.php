<?php

namespace App\Core;

class Router
{
    public function dispatch(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
        $path = trim($path, '/');

        $segments = ($path === '') ? [] : explode('/', $path);

        $controller = ucfirst($segments[0] ?? 'Auth') . 'Controller';
        $method     = $segments[1] ?? 'index';
        $params     = array_slice($segments, 2);

        $controllerClass = "App\\Controllers\\{$controller}";

        // if (!class_exists($controllerClass)) {
        //     $controllerClass = "App\\Controllers\\NotfoundController";
        //     $method = 'index';
        //     $params = [];
        // }

        $instance = new $controllerClass();

        // if (!method_exists($instance, $method)) {
        //     $instance = new \App\Controllers\NotfoundController();
        //     $method = 'index';
        //     $params = [];
        // }

        call_user_func_array([$instance, $method], $params);
    }
}
