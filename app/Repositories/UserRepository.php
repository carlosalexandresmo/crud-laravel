<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data): array
    {
        $user = User::create($data)->toArray();
        return $user;
    }

    public function update(array $data, int $id): array
    {
        return [];
    }

    public function delete(int $id): void {}

    public function find(int $id): ?object
    {
        return new \stdClass();
    }

    public function findAll(): array
    {
        return [];
    }
}
