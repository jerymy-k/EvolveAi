<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Core\Database;
use PDO;

class UserRepository implements UserRepositoryInterface
{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->pdo = $this->db->getConnection();
    }

    public function create(User $user): User
{
    $sql = "INSERT INTO users (username, email, password)
            VALUES (:username, :email, :password)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':username' => $user->getUsername(),
        ':email' => $user->getEmail(),
        ':password' => $user->getPassword()
    ]);

    $id = $this->pdo->lastInsertId();
    $user->setId($id);

    return $user;
}

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new User($row['id'], $row['username'], $row['email'], $row['password'],$row['confirmPassword'] );
        }
        return null;
    }

    public function findByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':username' => $username]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new User($row['id'], $row['username'], $row['email'], $row['password'],$row['confirmPassword']);
        }
        return null;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new User($row['id'], $row['username'], $row['email'], $row['password'] ,$row['confirmPassword']);
        }
        return null;
    }

    public function update(User $user)
    {
        $sql = "UPDATE users SET  username = :username, email = :email, password = :password WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $user->getId(),
            ':username' => $user->getUsername(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword()
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}