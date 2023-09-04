<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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

    public function userByEmail(string $email)
    {
        $user = self::where('email', $email)
            ->whereNotNull('password')
            ->first();

        if (!!$user) {
            return true;
        } else {
            return false;
        }
    }
}
