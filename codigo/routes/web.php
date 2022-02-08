<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedoresController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'show']);

Route::get('/fornecedores', [FornecedoresController::class, 'show']);