<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // esse método retorna uma view, nesse caso é uma com o nome 'auth/register', ou seja,
    // um arquivo chamado 'register.blade.php' dentro de uma pasta chamada 'auth'
    public function index()
    {
        return view('auth.register');
    }


    // Nesse método é criado uma instância do model de usuário
    // O model é um modelo que representa o banco de dados só que na programação
    // Nesse caso, é criada uma instância do model e em cada linha é chamado uma coluna que está no banco e passado um valor
    // ao final, é dado um 'save' para gravar os dados no banco
    public function register(Request $request)
    {
        $user = new User(); // nova instância
        $user->nome = $request->input('firstname'); // esse ->input('firstname') significa que, lá do formulário html, irá pegar o value do <input name="firstname"
        $user->sobrenome = $request->input('lastname'); // esse ->input('lastname') significa que, lá do formulário html, irá pegar o value do <input name="lastname"
        $user->email = $request->input('email'); // esse ->input('email') significa que, lá do formulário html, irá pegar o value do <input name="email" ....
        $user->password = Hash::make($request->input('password')); // Aqui, é pego o valor do input onde o name é 'password' e é criado uma hash, ou seja, uma senha antes de passar para variável que gravará no banco

        if ($user->save()) {
            return redirect('/');
        }

    }
}
