<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/salvarcadastro', [HomeController::class,"salvar"]);

Route::get('/listagem', [HomeController::class,"mostrar"]);

Route::get('/deletar/{id}', [HomeController::class,"deletar"]);

Route::get('/editar/{id}', [HomeController::class,"editar"]);

Route::get('/atualizar/{id}', [HomeController::class,"atualizar"]);

Route::get('/sobre', function () {
    return view('sobre');
});