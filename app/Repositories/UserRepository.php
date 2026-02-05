<?php
declare(strict_types=1);

namespace App\Repositories;

use PDO;

class UserRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function findByEmail(string $email): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function getById(int $id): ?array
    {
        $stmt = $this->pdo->prepare("SELECT id, name, email FROM users WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function create(string $name, string $email, string $hashPassword): bool
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)"
        );

        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $hashPassword,
        ]);
    }
    public function setResetToken(int $userId, string $token): bool
    {
        $stmt = $this->pdo->prepare("UPDATE users SET reset_token = :t WHERE id = :id");
        return $stmt->execute([':t' => $token, ':id' => $userId]);
    }

    public function findByResetToken(string $token): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE reset_token = :t LIMIT 1");
        $stmt->execute([':t' => $token]);
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    public function clearResetToken(int $userId): bool
    {
        $stmt = $this->pdo->prepare("UPDATE users SET reset_token = NULL WHERE id = :id");
        return $stmt->execute([':id' => $userId]);
    }

    public function updatePassword(int $userId, string $hashPassword): bool
    {
        $stmt = $this->pdo->prepare("UPDATE users SET password = :p WHERE id = :id");
        return $stmt->execute([':p' => $hashPassword, ':id' => $userId]);
    }

}
