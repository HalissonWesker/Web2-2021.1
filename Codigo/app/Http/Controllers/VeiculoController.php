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
        
        $veicuValidate = Veiculo::where('placa', $request->placa)->get();
        if(count($veicuValidate)){
        return redirect()->route('cadastroveiculo')->with('error', 'Placa já cadastrada');
        }

     
        

        // if(!empty(Veiculo::find('placa',$request->placa))){
        //     return redirect('/CadastroVeiculo');
        // }else{
        $veiculo = new Veiculo;
  
        $veiculo->ano = $request->ano;
        $veiculo->modelo = $request->modelo;
        $veiculo->placa = $request->placa;
        $veiculo->valor_seguro = $request->valor_seguro;
        $veiculo->valor_diaria = $request->valor_diaria;
     
        $veiculo->save();
  
        return redirect('/veiculos');
        
  
    }
    public function destroy($id){

        $veiculo = Veiculo::find($id);
        if($veiculo->status == 'ALUGADO'){
            return redirect('/veiculos')->with('error', 'Não é possivel excluir veiculo alugado');
        }else{
            $veiculo->delete();
            return redirect('/veiculos')->with('sucess', 'Veiculo excluido');
        }
    }

    public function create($id){
        $veiculo = Veiculo::find($id);
  
        return view('veiculos.atualizarVeiculo', ['veiculo' => $veiculo]);
     }

     public function update(Request $request){
        $veiculo = Veiculo::find($request->id);
        $veiculo->ano = $request->ano;
        $veiculo->modelo = $request->modelo;
        $veiculo->placa = $request->placa;
        $veiculo->valor_seguro = $request->valor_seguro;
        $veiculo->valor_diaria = $request->valor_diaria;

     
        $veiculo->save();
  
        return redirect('/veiculos');

     }
}
