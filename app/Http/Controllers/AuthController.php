<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // esse método carregará uma view que esteja em auth/ com o nome 'login.blade.php'
    public function index()
    {
        return view('auth.login');
    }

    // Esse método é chamado via post, receberá os valores do formulário e validará se o que foi digitado existe no banco, basicamente
    public function login(Request $request)
    {
        // Essa função valida se, o email digitado, e, a senha digitada (passa por um processo de criptografia) conferem
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            dd('deu'); //se sim, é printado na tela 'deu', aqui você pode colocar algum outro retorno personalizado
        } else {
            dd('n deu'); //se não, é printado na tela 'n deu', aqui você pode colocar algum outro retorno personalizado
        }
    }
}
