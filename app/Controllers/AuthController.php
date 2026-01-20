<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Repositories\UserRepository;
use App\Services\AuthService;

class AuthController extends Controller
{
    private AuthService $auth;

    public function __construct()
    {
        $pdo = Database::getInstance()->getConnection();
        $this->auth = new AuthService(new UserRepository($pdo));
    }

    public function index(): void
    {
        $this->redirect('/auth/login');
    }

    public function login(): void
    {
        if (!$this->isPost()) {
            $error = $this->flash('error');
            $this->view('auth.login', compact('error'));
            return;
        }

        $email = (string) $this->post('email', '');
        $password = (string) $this->post('password', '');

        $result = $this->auth->login($email, $password);

        if (!$result['ok']) {
            $this->flash('error', $result['message']);
            $this->redirect('/auth/login');
        }

        $user = $result['user'];

        $_SESSION['user_id'] = (int) $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];

        $this->redirect('/dashboard/index');
    }

    public function register(): void
    {
        if (!$this->isPost()) {
            $error = $this->flash('error');
            $this->view('auth.register', compact('error'));
            return;
        }

        $name = (string) $this->post('name', '');
        $email = (string) $this->post('email', '');
        $password = (string) $this->post('password', '');

        $result = $this->auth->register($name, $email, $password);

        if (!$result['ok']) {
            $this->flash('error', $result['message']);
            $this->redirect('/auth/register');
        }

        $this->flash('error', 'Compte créé. Connecte-toi.');
        $this->redirect('/auth/login');
    }

    public function logout(): void
    {
        session_destroy();
        $this->redirect('/auth/login');
    }
}
