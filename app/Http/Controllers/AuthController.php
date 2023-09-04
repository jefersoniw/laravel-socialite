<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $searchUser = $this->user->userByEmail($request->email);

            if (!!$searchUser) {
                if (!!$searchUser->password) {
                    return \redirect()->route('login')->with('message', 'Usuário com este email ' . $request->email . ' já existente no sistema');
                }

                $user = $this->user->updateUser($searchUser, $request->all());

                if ($user['error'] == true) {
                    throw new Exception();
                }
            } else {
                $user = $this->user->storeUser($request->all());

                if ($user['error'] == true) {
                    throw new Exception();
                }
            }

            DB::commit();

            Auth::login($user);

            return redirect()->route('dashboard');
        } catch (Exception $error) {
            DB::rollBack();

            $erro = [
                'erro' => 'Erro ao cadastrar usuário',
                'erro_msg' => $error->getMessage(),
                'erro_line' => $error->getLine(),
            ];

            return \redirect()->route('login')->with('message', $erro['erro'] . ' - ' . $erro['erro_msg']);
        }
    }
}
