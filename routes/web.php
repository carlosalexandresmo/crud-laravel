<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/cadastro', [RegisterController::class, 'index'])->name('register');
Route::get('recuperar-senha', [ForgotPasswordController::class, 'index'])->name('forgotPassword');