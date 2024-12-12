<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->validated();
            $token = $this->authService->login($credentials);

            if ($token) {
                return response()->json(['token' => $token], Response::HTTP_OK);
            } else {
                return response()->json(['error' => 'E-mail e/ou Senha invalidos!'], 401);
            }

        } catch (\Exception $e) {
            // Log::error($e, $request->all());
            return response()->json(['error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function logout(Request $request)
    {
        try {
            $this->authService->logout($request);
            return response()->json(['logout' => 'Logout realizado com sucesso!'], Response::HTTP_OK);

        } catch (\Exception $exception) {
            // Log::error($exception);
            return response()->json(['error' => $exception->getMessage()], 400);
        }
    }
}
