<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

// Rota da página inicial (Boas vindas)
Route::get('/', function () {
    return view('welcome');
});

// Rotas do CRUD de Categorias (Cria todas as rotas automáticas)
Route::resource('categorias', CategoriaController::class);