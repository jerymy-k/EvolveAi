<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;

class AuthService
{
    public function __construct(private UserRepository $users) {}

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
}
