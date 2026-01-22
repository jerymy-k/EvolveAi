<?php

namespace App\Controllers;

use App\Core\Controller;
class LandingPageController extends Controller
{
    public function index(): void
    {
        $this->view('/landingpage/landingpage');
    }
}
