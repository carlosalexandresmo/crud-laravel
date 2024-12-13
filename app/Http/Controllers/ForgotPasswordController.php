<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Password;

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
            
            $status = Password::sendResetLink(
                $request->only('email')
            );
            
            return $status === Password::RESET_LINK_SENT
            ? response()->json($status, Response::HTTP_OK)
            : response()->json($status, Response::HTTP_BAD_REQUEST);

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
