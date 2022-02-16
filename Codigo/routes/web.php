<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|<i class="fas fa-garage-open"></i>
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\ClienteController;



/*Veiculo*/

Route::get('/veiculos', [VeiculoController::class, 'show'])->middleware('auth');

Route::get('/CadastroVeiculo', function (){
return view('veiculos.cadastroVeiculo')->middleware('auth');
})->name('cadastroveiculo')->middleware('auth');
Route::post('/StoreVeiculo', [VeiculoController::class, 'store'])->middleware('auth');
Route::get('/apagarVeiculo/{id}',[VeiculoController::class, 'destroy'])->middleware('auth');
Route::get('atualizarVeiculo/{id}', [VeiculoController::class, 'create'])->name('atualizaveiculo');

Route::post('/updateVeiculo', [VeiculoController::class, 'update'])->middleware('auth');




/*Cliente*/
Route::get('/clientes', [ClienteController::class, 'show'])->middleware('auth');

Route::post('/StoreCliente', [ClienteController::class, 'store'])->middleware('auth');

Route::get('/CadastroCliente', function(){
    return view('clientes.cadastroClientes')->middleware('auth');
})->name('cadastrocliente');
Route::get('atualizarClientes/{id}', [ClienteController::class, 'create'])->middleware('auth');

Route::post('/updateCliente', [ClienteController::class, 'update'])->middleware('auth');

Route::get('/apagarClientes/{id}',[ClienteController::class, 'destroy'])->middleware('auth');

// Route::get('/CadastroCliente', [ClienteController::class, 'store']);


/* aluguel  */
Route::get('/aluguel', [AluguelController::class, 'show'])->middleware('auth');
Route::get('/CadastroAluguel', [AluguelController::class, 'create'])->middleware('auth');
Route::post('/storeAluguel',[AluguelController::class, 'store'])->middleware('auth');
Route::get('/apagarAluguel/{id}',[AluguelController::class, 'destroy'])->middleware('auth');
Route::get('atualizarAluguel/{id}', [AluguelController::class, 'createUpdate'])->middleware('auth');
Route::post('/updateAluguel', [AluguelController::class, 'update']);


//devolução

Route::get('/Devolucao', [AluguelController::class, 'showDev'])->middleware('auth');

Route::get('/CadastroDevolucao', [AluguelController::class, 'createDev'])->middleware('auth');

Route::post('/StoreDevolucao', [AluguelController::class, 'storeDev'])->middleware('auth');

Route::post('/CalcDevolucao', [AluguelController::class, 'calc'])->middleware('auth');




// Route::post('/StoreCliente', ClienteController::class, 'store');
// Route::post('/cadastroVeiculo', VeiculoController::class, 'store');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('menu');
})->name('menu');


 Route::get('/cadi', function(){

  return view('auth.login');
 });


// Route::get('/regis', function(){

//     return view('auth.register');
// });





Route::get('/test', function(){

    return view('dashboard');
   });