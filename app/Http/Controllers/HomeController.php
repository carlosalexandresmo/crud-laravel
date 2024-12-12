<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    //
    public function index() 
    {
        return view('pages.home');
    }

    public function findAll()
    {
        try {
            return response()->json(['users' => UsersResource::collection(User::all())], Response::HTTP_OK);
        } catch (\Exception $exception) {
            //     Log::error($exception);
            return response()->json(['error' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
