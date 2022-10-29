<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Aqui diz a tabela que é usado no banco de dados, desconsiderando o nome da classe (User)
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Aqui digo quais campos são preenchiveis
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    //Aqui digo quais campos não devem ser exibidos no retorno
    protected $hidden = [
        'senha',
    ];

//    /**
//     * The attributes that should be cast.
//     *
//     * @var array<string, string>
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
