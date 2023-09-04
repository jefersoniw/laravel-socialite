<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function index()
    {
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $providerUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'email' => $providerUser->email,
        ], [
            'provider_id' => $providerUser->id,
            'name' => $providerUser->name,
            'provider_avatar' => $providerUser->avatar,
            'provider_name' => $provider,
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
