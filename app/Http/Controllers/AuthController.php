<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login.login');
    }

    public function register()
    {
        return view('login.register');
    }

    public function logout()
    {
        Auth::logout();

        return \redirect()->route('login');
    }

    public function store(StoreUserRequest $request)
    {

        $searchUser = $this->user->userByEmail($request->email);

        dd($searchUser);

        if ($searchUser == true) {
            return \redirect()->route('login')->with('message', 'Usuário com este email ' . $request->email . ' já existente no sistema');
        }



        $user = $this->user->storeUser($request->all());
    }
}
