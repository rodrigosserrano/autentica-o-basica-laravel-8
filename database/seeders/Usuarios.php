<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Aqui é criado uma nova linha na tabela 'usuarios' com informações aleatórias
        DB::table('usuarios')->insert([
            'nome' => Str::random(10), // Aqui cria uma string aleatória com 10 caracteres
            'sobrenome' => Str::random(10), // Aqui cria uma string aleatória com 10 caracteres
            'email' => Str::random(10).'@email.com', // Aqui cria uma string aleatória com 10 caracteres e concatena no final @email.com
            'password' => Hash::make('password') // Aqui cria uma hash (utilizado para senha) com um valor padrao 'password', ou seja, todos registros criados com esse seeder, virá com a senha 'password'
        ]);
    }
}
