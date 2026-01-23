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

        $this->redirect('/questionnaire/index');
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
    public function forgotPassword(): void
    {
        if (!$this->isPost()) {
            $error = $this->flash('error');
            $success = $this->flash('success');
            $this->view('auth.forgot', compact('error', 'success'));
            return;
        }

        $email = (string) $this->post('email', '');
        $result = $this->auth->forgetPassword($email);

        if (!$result['ok']) {
            $this->flash('error', $result['message']);
            $this->redirect('/auth/forgotPassword');
        }

        $this->flash('success', $result['message']);
        $this->redirect('/auth/forgotPassword');
    }

    public function resetPassword(): void
    {
        $token = (string) ($_GET['token'] ?? '');
        $check = $this->auth->verifyResetToken($token);

        if (!$check['ok']) {
            $this->flash('error', $check['message']);
            $this->redirect('/auth/login');
        }

        $error = $this->flash('error');
        $this->view('auth.reset', compact('error', 'token'));
    }

    public function updatePassword(): void
    {
        if (!$this->isPost()) {
            $this->redirect('/auth/login');
        }

        $token = (string) $this->post('token', '');
        $password = (string) $this->post('password', '');

        $result = $this->auth->updatePasswordWithToken($token, $password);

        if (!$result['ok']) {
            $this->flash('error', $result['message']);
            $this->redirect('/auth/resetPassword?token=' . urlencode($token));
        }

        $this->flash('success', $result['message'] . ' Connecte-toi.');
        $this->redirect('/auth/login');
    }


}
