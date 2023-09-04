<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('login.register');
Route::post('/register', [AuthController::class, 'store'])->name('login.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirect');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])->name('auth.callback');
