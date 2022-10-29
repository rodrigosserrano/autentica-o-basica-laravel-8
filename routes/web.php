<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Aqui é uma rota GET, ou seja, pode ser acessada diretamente no navegador e já visualizar
Route::get('/', [AuthController::class, 'index'])->name('login');  // aqui também é setado um nome para rota, no caso, nome é 'login'
// Aqui é uma rota POST, ou seja, não pode ser acessada diretamente no navegador, é uma rota que deve ser chamada por uma aplicação para passar dados (é muito usado para formulário)
Route::post('/', [AuthController::class, 'login'])->name('login');

// Aqui é uma rota GET, ou seja, pode ser acessada diretamente no navegador e já visualizar
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // aqui também é setado um nome para rota, no caso, nome é 'register'
// Aqui é uma rota POST, ou seja, não pode ser acessada diretamente no navegador, é uma rota que deve ser chamada por uma aplicação para passar dados (é muito usado para formulário)
Route::post('/register', [RegisterController::class, 'register'])->name('register');

