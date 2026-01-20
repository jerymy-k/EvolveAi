<?php
declare(strict_types=1);

namespace App\Repositories;

use PDO;

class UserRepository
{
    public function __construct(private PDO $pdo) {}

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
}
