<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\ClienteController;




Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('menu');
})->name('menu');


Route::middleware('auth')->group(function () {

    Route::prefix("/aluguel")->group(function() {
        Route::get('/', [AluguelController::class, 'index'])->name('aluguel.index');
        Route::get('/cadastro', [AluguelController::class, 'create'])->name('aluguel.create');
        Route::post('/store',[AluguelController::class, 'store'])->name('aluguel.store');
        Route::get('/apagar/{id}',[AluguelController::class, 'destroy'])->name('aluguel.destroy');
        Route::get('edit/{id}', [AluguelController::class, 'createUpdate'])->name('aluguel.edit');
        Route::post('/updateAluguel', [AluguelController::class, 'update'])->name('aluguel.update');
    });    
    
    Route::prefix("/clientes")->group(function() {
        Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
        Route::post('/store', [ClienteController::class, 'store'])->name('cliente.store');
        Route::get('/editar/{id}', [ClienteController::class, 'create'])->name('cliente.edit');
        Route::delete('/apagar/{id}',[ClienteController::class, 'destroy'])->name('cliente.destroy');
        Route::post('/atualizar', [ClienteController::class, 'update'])->name('cliente.update');
        Route::get('/cadastro', function(){return view('clientes.cadastroClientes');})->name('cliente.regist');
    });
    
    Route::prefix("/devolucao")->group(function() {
        Route::get('/', [AluguelController::class, 'indexdev'])->name('devolucao.index');
        Route::get('/realizar', [AluguelController::class, 'createdev'])->name('devolucao.create');
        Route::post('/store', [AluguelController::class, 'storedev'])->name('devolucao.store');
        Route::post('/pagamento', [AluguelController::class, 'calc'])->name('devolucao.calc');
        });

    Route::prefix("/veiculos")->group(function() {
        Route::get('/', [VeiculoController::class, 'index'])->name('veiculo.index');
        Route::get('/cadastro', [VeiculoController::class, 'formulario'])->name('veiculo.regis');
        Route::post('/store', [VeiculoController::class, 'store'])->name('veiculo.store');
        Route::get('/apagar/{id}',[VeiculoController::class, 'destroy'])->name('veiculo.destroy');
        Route::get('atualizar/{id}', [VeiculoController::class, 'create'])->name('veiculo.create');
        Route::post('/update', [VeiculoController::class, 'update'])->name('veiculo.update');
    });
  

    




    


});