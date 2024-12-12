<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Services\UserService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
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

    public function cep($cep)
    {
        $url = "https://viacep.com.br/ws/" .  $cep . "/json/";

        $client = new Client([
            'timeout' => 60,
            'connect_timeout' => 60,
        ]);

        try {
            $response = $client->get(
                $url,
            );

            $result = json_decode($response->getBody()->getContents());
            return response()->json($result, Response::HTTP_OK);
        } catch (RequestException | GuzzleException | ClientException $exception) {
            return response()->json($exception, Response::HTTP_BAD_REQUEST);
        }
    }
}
