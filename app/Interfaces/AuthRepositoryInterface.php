<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AuthRepositoryInterface extends BaseInterface
{
    public function login(array $credentials): ?string;
    public function logout(Request $request): void;
}
