<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function create(User $user);
    public function findByEmail($email);
    public function findById($id);
    public function update(User $user);
    public function delete($id);
}