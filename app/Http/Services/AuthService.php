<?php

namespace App\Http\Services;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\Request;

class AuthService
{

    protected $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(array $credentials): ?string
    {
        $token = $this->authRepository->login($credentials);
        return $token;
    }

    public function logout(Request $request): void
    {
        $this->authRepository->logout($request);
    }
}
