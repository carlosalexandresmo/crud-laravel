<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Http\Response;

class ForgotPasswordController extends Controller
{
    //
    public function index() 
    {
        return view('pages.forgot_password');
    }

    public function forgotPassword(ForgotPasswordRequest $request) 
    {
        try {
            $data = $request->validated();

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
