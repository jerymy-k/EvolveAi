<?php

namespace App\Controllers;

class LandingPageController
{
    public function index(): void
    {
        require __DIR__ . '/../Views/landingPage/landingPage.php';
    }
}
