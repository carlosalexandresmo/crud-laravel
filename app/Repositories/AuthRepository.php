<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $credentials): ?string
    {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken($user->name)->plainTextToken;
            return $token;
        }
        return null;
    }

    public function logout($request): void
    {
        Auth::logout();
        $request->user()->tokens()->delete();
    }

    public function create(array $data): array
    {
        return [];
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
