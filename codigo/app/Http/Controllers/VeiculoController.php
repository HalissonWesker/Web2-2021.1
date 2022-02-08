<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function show(){

        $veiculo = Veiculo::all();

        return view('veiculos.viewVeiculos', ['veiculo' => $veiculo]);

    }



    public function store(Request $request){
   
        $veiculo = new Veiculo;
  
        $veiculo->ano = $request->ano;
        $veiculo->modelo = $request->modelo;
        $veiculo->placa = $request->placa;
        $veiculo->ValorSeguro = $request->ValorSeguro;
        $veiculo->ValorDiaria = $request->ValorDiaria;
        $veiculo->status = 0;
     
        $veiculo->save();
  
        return redirect('veiculos.viewVeiculos');
        
  
    }
}
