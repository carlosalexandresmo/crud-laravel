<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Services\CepService;
use App\Http\Services\UserService;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    //
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('pages.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
            $data = $request->validated();
            $user = $this->userService->create($data);
            return response()->json($user, Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro ao realizar o cadastro!'], Response::HTTP_BAD_REQUEST);
        }
    }

    public function cep(string $cep, CepService $cepService)
    {
        try {
            $result = $cepService->search($cep);
            return response()->json($result, Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
