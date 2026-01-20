<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\UserRepository;

use App\Services\UserService;
// use App\Models\User;

class AuthController extends Controller
{
    private UserRepository $userRepository;
    private UserService $userService;

    public function __construct()
    {
        session_start();
        $this->userRepository = new UserRepository();
        $this->userService = new UserService($this->userRepository);
    }

    public function showLogin(): void
    {
        if ($this->isAuthenticated()) {
            $this->redirect('/dashboard');
        }

        $this->view('auth/login.php');
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('/login');
        }

        $this->requireCSRF();

        $emailOrUsername = $this->sanitize($_POST['emailOrUsername'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($emailOrUsername) || empty($password)) {
            $_SESSION['error'] = 'Please fill all fields';
            $this->redirect('/login');
        }

        $user = $this->userService->loginUser($emailOrUsername, $password);

        if ($user) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_email'] = $user->getEmail();
            $_SESSION['success'] = 'Login successful!';
            $this->redirect('/dashboard');
        } else {
            $_SESSION['error'] = 'Invalid credentials';
            $this->redirect('/login');
        }
    }

    public function showRegister(): void
    {
        if ($this->isAuthenticated()) {
            $this->redirect('/dashboard');
        }

        $this->view('auth/Register.php');
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('/register');
        }

        $this->requireCSRF();

        $name = $this->sanitize($_POST['Fullname'] ?? '');
        $username = $this->sanitize($_POST['username'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';

        if (empty($name) || empty($username) || !$email || empty($password)) {
            $_SESSION['error'] = 'Please fill all fields correctly';
            $this->redirect('/register');
        }

        try {
            $user = $this->userService->register($name, $username, $email, $password);

            if ($user) {
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['user_email'] = $user->getEmail();
                $_SESSION['success'] = 'Registration successful!';
                $this->redirect('/dashboard');
            } else {
                $_SESSION['error'] = 'Registration failed';
                $this->redirect('/register');
            }
        } catch (\Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            $this->redirect('/register');
        }
    }

    public function logout(): void
    {
        session_destroy();
        $this->redirect('/login');
    }
}