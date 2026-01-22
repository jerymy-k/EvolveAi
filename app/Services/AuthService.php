<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;

class AuthService
{
    public function __construct(private UserRepository $users)
    {
    }

    private function passwordStrong(string $password): bool
    {
        return (bool) preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password);
    }

    public function register(string $name, string $email, string $password): array
    {
        $name = trim($name);
        $email = trim(strtolower($email));

        if ($name === '' || $email === '' || $password === '') {
            return ['ok' => false, 'message' => 'Tous les champs sont obligatoires.'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['ok' => false, 'message' => "Email invalide."];
        }

        if (!$this->passwordStrong($password)) {
            return ['ok' => false, 'message' => "Mot de passe faible (8+ / maj / min / chiffre)."];
        }

        if ($this->users->findByEmail($email)) {
            return ['ok' => false, 'message' => "Email déjà utilisé."];
        }

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $created = $this->users->create($name, $email, $hash);

        return $created
            ? ['ok' => true, 'message' => 'Compte créé.']
            : ['ok' => false, 'message' => "Erreur création compte."];
    }

    public function login(string $email, string $password): array
    {
        $email = trim(strtolower($email));

        if ($email === '' || $password === '') {
            return ['ok' => false, 'message' => 'Email et mot de passe requis.'];
        }

        $user = $this->users->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            return ['ok' => false, 'message' => 'Identifiants incorrects.'];
        }

        return ['ok' => true, 'user' => $user];
    }
    public function forgetPassword(string $email): array
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['ok' => false, 'message' => "Email invalide."];
        }

        $user = $this->users->findByEmail($email);
        if (!$user) {
            return ['ok' => false, 'message' => "No Account With This Email"];
        }

        $token = bin2hex(random_bytes(32));
        $this->users->setResetToken((int) $user['id'], $token);

        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $link = "http://{$host}/auth/resetPassword?token={$token}";

        $subject = 'reset password';
        $html = "<p>Click here to reset your password:</p><p><a href='{$link}'>{$link}</a></p>";

        $sent = \App\Core\Mailer::send($email, $user['name'], $subject, $html);

        if (!$sent) {
            return ['ok' => false, 'message' => "Email not sent"];
        }

        return ['ok' => true, 'message' => "Reset link sent to your email"];
    }

    public function verifyResetToken(string $token): array
    {
        $token = trim($token);
        if ($token === '') {
            return ['ok' => false, 'message' => 'Lien invalide.'];
        }

        $user = $this->users->findByResetToken($token);
        if (!$user) {
            return ['ok' => false, 'message' => 'Lien invalide.'];
        }

        return ['ok' => true, 'user' => $user];
    }

    public function updatePasswordWithToken(string $token, string $password): array
    {
        $token = trim($token);

        if ($token === '') {
            return ['ok' => false, 'message' => 'Lien invalide.'];
        }

        // validation password (8+ / maj / min / chiffre)
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
            return ['ok' => false, 'message' => 'Mot de passe faible (8+ / maj / min / chiffre).'];
        }

        $user = $this->users->findByResetToken($token);
        if (!$user) {
            return ['ok' => false, 'message' => 'Lien invalide.'];
        }

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $this->users->updatePassword((int) $user['id'], $hash);
        $this->users->clearResetToken((int) $user['id']);

        return ['ok' => true, 'message' => 'Mot de passe mis à jour.'];
    }
}
