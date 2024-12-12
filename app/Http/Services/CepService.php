<?php

namespace App\Http\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Response;

class CepService
{
    public function search(string $cep)
    {

        if (!$this->isValidCEP($cep)) {
            throw new Exception('O CEP informado não é válido');
        }

        $url = "https://viacep.com.br/ws/" .  $cep . "/json/";

        $client = new Client([
            'verify' => false,
            'timeout' => 60,
            'connect_timeout' => 60,
        ]);

        try {
            $response = $client->get(
                $url,
            );

            return json_decode($response->getBody()->getContents());
        } catch (RequestException | GuzzleException | ClientException $exception) {
            return response()->json($exception, Response::HTTP_BAD_REQUEST);
        }
    }

    private function isValidCEP(string $input): bool
    {
        return preg_match('/^\d{8}$/', $input) === 1;
    }
}
