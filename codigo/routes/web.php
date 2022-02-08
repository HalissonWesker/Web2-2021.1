<?php


use Illuminate\Support\Facades\Route;




use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {





    return view('welcome');
});

Route::prefix('entradas')->group(function () {
    Route::post('/store', [EntradaController::class, 'store'])->name('entradas.store');
    Route::get('/create', [EntradaController::class, 'create'])->name('entradas.create');
    Route::get('/', [EntradaController::class, 'index'])->name('entradas.index');

});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');    
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');    
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update', [ClienteController::class, 'update'])->name('clientes.update');

    Route::delete('/destroy', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

Route::prefix('produtos')->group(function () {
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/store', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');

 
});



Route::prefix('vendas')->group(function () {

    Route::post('/store', [VendaController::class, 'store'])->name('vendas.store');
    Route::get('/create', [VendaController::class, 'create'])->name('vendas.create');
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');
});

Route::prefix('fornecedores')->group(function () {   
    
    
    Route::get('/show/{id}', [FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::delete('/destroy', [ClienteController::class, 'destroy'])->name('fornecedores.destroy');
    Route::post('/store', [FornecedorController::class, 'store'])->name('fornecedores.store');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedores.create'); 
    Route::get('/', [FornecedorController::class, 'index'])->name('fornecedores.index');  

});
