<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Models\User;

class UserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($fullname, $username, $email, $password)
    {
        if ($this->userRepository->findByEmail($email) || $this->userRepository->findByUsername($username)) {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = new User(0, $fullname, $username, $email, $hashedPassword);

        return $this->userRepository->create($user);
    }

    public function loginUser($identifier, $password)
    {
        $user = $this->userRepository->findByEmail($identifier);
        if (!$user) {
            $user = $this->userRepository->findByUsername($identifier);
        }

        if ($user && password_verify($password, $user->getPassword())) {
            return $user;
        }

        return null;
    }
}