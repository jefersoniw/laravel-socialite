<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider_id',
        'provider_avatar',
        'provider_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function storeUser(array $request)
    {
        try {
            $user = new self;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = $request['password'];
            if (!$user->save()) {
                throw new Exception("Erro ao cadastrar usuário");
            }
            return $user;
        } catch (Exception $error) {
            $erro = [
                'error' => true,
                'erro' => 'Erro ao cadastrar usuário',
                'erro_msg' => $error->getMessage(),
                'erro_line' => $error->getLine(),
            ];
            return $erro;
        }
    }

    public function updateUser(User $user, array $request)
    {
        try {
            $user->name = $request['name'] ?? null;
            $user->email = $request['email'] ?? null;
            $user->password = $request['password'] ?? null;
            if (!$user->save()) {
                throw new Exception("Erro ao atualizar usuário");
            }
            return $user;
        } catch (Exception $error) {
            $erro = [
                'error' => true,
                'erro' => 'Erro ao atualizar usuário',
                'erro_msg' => $error->getMessage(),
                'erro_line' => $error->getLine(),
            ];
            return $erro;
        }
    }

    public function userByEmail(string $email)
    {
        $user = self::where('email', $email)->first();
        return $user;
    }

    public function findLogin(array $request)
    {

        $user = self::where('email', $request['email'])->first();
        if (!$user) {
            return false;
        }

        if (Hash::check($request['password'], $user->password) == true) {
            return $user;
        } else {
            return false;
        }
    }
}
