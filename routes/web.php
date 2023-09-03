<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('login.login');
})->name('login');

Route::get('/register', function () {
    return view('login.register');
})->name('login.register');

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('auth.github');

Route::get('/auth/github/callback', function () {
    $user = Socialite::driver('github')->user();

    dd($user);
    // $user->token
});
