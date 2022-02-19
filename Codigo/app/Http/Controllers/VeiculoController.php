<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index(){

        $veiculo = Veiculo::all();

        return view('veiculos.viewVeiculos', ['veiculo' => $veiculo]);

    }



    public function store(Request $request){
        
        $veicuValidate = Veiculo::where('placa', $request->placa)->get();
        if(count($veicuValidate)){
        return redirect()->route('veiculo.regis')->with('error', 'Placa já cadastrada');
        }

        $veiculo = new Veiculo;
  
        $veiculo->ano = $request->ano;
        $veiculo->modelo = $request->modelo;
        $veiculo->placa = $request->placa;
        $veiculo->valor_seguro = $request->valor_seguro;
        $veiculo->valor_diaria = $request->valor_diaria;
     
        $veiculo->save();
  
        return redirect()->route('veiculo.index')->with('sucess', 'Veiculo cadastrado!');
        
  
    }
    public function destroy($id){

        $veiculo = Veiculo::find($id);
        if($veiculo->status == 'ALUGADO'){
            return redirect()->route('veiculo.index')->with('error', 'Não é possivel excluir veiculo alugado');
        }else{
            $veiculo->delete();
            return redirect()->route('veiculo.index')->with('sucess', 'Veiculo excluido com sucesso!');
        }
    }

    public function create($id){
        $veiculo = Veiculo::find($id);
  
        return view('veiculos.atualizarveiculo', ['veiculo' => $veiculo]);
     }

     public function formulario(){
        return view('veiculos.cadastroveiculo');
     }

     public function update(Request $request){
        $veiculo = Veiculo::find($request->id);
        $veiculo->ano = $request->ano;
        $veiculo->modelo = $request->modelo;
        $veiculo->placa = $request->placa;
        $veiculo->valor_seguro = $request->valor_seguro;
        $veiculo->valor_diaria = $request->valor_diaria;

     
        $veiculo->save();
  
        return redirect()->route('veiculo.index')->with('sucess', 'operação realizada com sucesso');

     }
}
