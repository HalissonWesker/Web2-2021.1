<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});

/*Veiculo*/

Route::get('/veiculos', [VeiculoController::class, 'show']);

Route::get('/CadastroVeiculo', function (){
    return view('veiculos.cadastroVeiculo');
});

Route::post('/StoreVeiculo', [VeiculoController::class, 'store']);




/*Cliente*/
Route::get('/clientes', function () {
    return view('clientes.viewClientes');
});

Route::get('/CadastroCliente', [ClienteController::class, 'store']);


// Route::get('/CadastroCliente', [ClienteController::class, 'store']);


/* aluguel  */


Route::get('/aluguel', function () {
    return view('alugueis.viewAlugueis');
});


/*Funcionario*/

Route::get('/funcionarios', [FuncionarioController::class, 'show']);


Route::get('/CadastroFuncionario', function () {
   return view('funcionarios.cadastroFuncionario');
 });







// Route::post('/StoreCliente', ClienteController::class, 'store');
// Route::post('/cadastroVeiculo', VeiculoController::class, 'store');
// Route::post('/SalvarFuncionario', FuncionarioController::class, 'store');

