<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clientes')->group(function () {
    Route::get('/show', [ClienteController::class, 'show']);
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/create', [ClienteController::class, 'create']);
    Route::post('/store', [ClienteController::class, 'store']);
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/show', [FornecedorController::class, 'show']);
    Route::get('/', [FornecedorController::class, 'index']);
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store']);
});
