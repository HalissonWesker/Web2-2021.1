<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluguel;
use App\Models\Veiculo;
use App\Models\Cliente;


class AluguelController extends Controller
{
    public function index(){
            
        $aluguel = Aluguel::where('status', 'aguardando')->get();// só alugueis ativos os outros ficam em devolução
  
        $all = array();
        foreach($aluguel as $alu){
            $veiculos = Veiculo::find($alu->veiculo_id);
            $clientes = Cliente::find($alu->cliente_id);
        array_push($all,['nome'=> $clientes->nome,'diaria'=> $veiculos->valor_diaria, 'loca'=> $alu->data_aluguel, 'combu'=> $alu->combustivel, 'veiculo'=> $veiculos->placa,'modelo'=> $veiculos->modelo, 'id'=>$alu->id]);
            
        }

        return view('alugueis.viewalugueis', ['aluguel' => $all]);

    }
    
    public function create(){
        $veiculos = Veiculo::where('status', 'disponivel')->get();
        $clientes = Cliente::all();

        return view('alugueis.cadastroaluguel', compact('clientes', 'veiculos'));

    }
  
    public function store(Request $request){
    
        $aluguel = new Aluguel;
  
        $aluguel->veiculo_id = $request->idVeiculo;
        $aluguel->cliente_id = $request->idCliente;
        $aluguel->data_aluguel = $request->date;
        $aluguel->combustivel = $request->Combustivel;
        $aluguel->save();

        $veiculo = Veiculo::find($request->idVeiculo);
        $veiculo->status = 'ALUGADO';
        $veiculo->save();
        

        return redirect()->route('aluguel.index')->with('success', 'Aluguel realizado com sucesso');

    }


    public function indexdev(){
        $aluguel = Aluguel::where('status', 'finalizado')->get();// só alugueis inativos os outros ficam em aluguel
        $all = array();
        foreach($aluguel as $alu){
            $veiculos = Veiculo::find($alu->veiculo_id);
            $clientes = Cliente::find($alu->cliente_id);
        array_push($all,['nome'=> $clientes->nome,'total'=> $alu->valor_total,'pago'=>$alu->valor_pago, 'loca'=> $alu->data_devolucao, 'notas'=> $alu->notas, 'veiculo'=> $veiculos->placa,'modelo'=> $veiculos->modelo, 'id'=>$alu->id, 'pag'=> $alu->forma_pagamento]);
        }
        return view('devolucoes.viewdevolucoes', ['aluguel' => $all]);

    }
    public function storedev(Request $request){
        $aluguel = Aluguel::find($request->id);
        $aluguel->valor_total = $request->valor_total;
        $aluguel->valor_pago = $request->valor_pago;
        $aluguel->valor_adicional = $request->valor_adicional;
        $aluguel->notas = $request->notas;
        $aluguel->forma_pagamento = $request->forma_pagamento;
        $aluguel->data_devolucao = $request->data_devolucao;
        $aluguel->status= 'finalizado';
        $aluguel->save();
        $veiculo = Veiculo::find($aluguel->veiculo_id);
        $veiculo->status = 'DISPONIVEL';
        $veiculo->save();

        return redirect()->route('devolucao.index')->with('success', 'Devolução realizado com sucesso');

    }
    public function createdev(){
        $aluguel = Aluguel::where('status', 'aguardando')->get();// só alugueis ativos os outros ficam em devolução
        $all = array();
        foreach($aluguel as $alu){
            $veiculos = Veiculo::find($alu->veiculo_id);
            $clientes = Cliente::find($alu->cliente_id);
        array_push($all,['nome'=> $clientes->nome,'diaria'=> $veiculos->valor_diaria, 'loca'=> $alu->data_aluguel, 'combu'=> $alu->combustivel, 'veiculo'=> $veiculos->placa,'modelo'=> $veiculos->modelo, 'id'=>$alu->id]);
            
        }

        return view('devolucoes.cadastroDevolucao', ['aluguel' => $all]);


       
    }
    public function calc(Request $request){
        $aluguel = Aluguel::find($request->id);
        $veiculo = Veiculo::find($aluguel->veiculo_id);
        $dias = (int)(( strtotime($request->data_devolucao) - strtotime($aluguel->data_aluguel))/86400)+1;
        $diaria = (float)$veiculo->valor_diaria;
        $val_ad = (int)$request->Valor_adicional;
        $comb = (int)$aluguel->combustivel;
        $comb_del = (int) $request->combustiveldevolucao;
        $val_comb = (float)$request->Valorcombustivel;
        $val_dias = (float)$diaria*$dias;
        $comb_dif = $comb  - $comb_del;
        $total = $val_dias + $val_ad + ($comb_dif*$val_comb);
        $all = array();
        array_push($all,['notas'=> $request->notas,'Valor_adicional'=> $request->Valor_adicional, 'data_devolucao'=> $request->data_devolucao, 'id'=>$request->id, 'valor'=>$total]);

        return view('devolucoes.cadastroPagamento', ['aluguel' => $all]);
    }

    public function destroy($id){

       
        $aluguel = Aluguel::find($id);
        $veiculo = Veiculo::find($aluguel->veiculo_id);
        $veiculo->status = 'DISPONIVEL';
        $veiculo->save();
        $aluguel->delete();

        return redirect('/aluguel')->with('msg', 'Aluguel deletado');

    }
    public function createUpdate($id){
        $aluguel = Aluguel::find($id);
        $veiculo = Veiculo::find($aluguel->veiculo_id);
        $veiculos = Veiculo::where('status', 'DISPONIVEL')->get();
        $clientes = Cliente::all();
        $date=substr($aluguel->data_aluguel, 0, 10);
        $all = array();
        array_push($all,['veiculo'=> $veiculo->id,'cliente'=> $aluguel->cliente_id,'modelo'=> $veiculo->modelo,'placa'=>$veiculo->placa, 'ano'=>$veiculo->ano, 'comb'=> $aluguel->combustivel, 'id'=>$id, 'data'=>$date]);
        return view('alugueis.atualizarAluguel', compact('all','veiculos','clientes'));
    }
    public function update(Request $request){
        $aluguel = Aluguel::find($request->id);
        if($aluguel->veiculo_id != $request->idVeiculo){
            $veiculo = Veiculo::find($aluguel->veiculo_id);
            $veiculo->status = 'DISPONIVEL';
            $veiculo->save();
            $veiculo = Veiculo::find($request->idVeiculo);
            $veiculo->status = 'ALUGADO';
            $veiculo->save();
            $aluguel->veiculo_id =  $request->idVeiculo;
        }
        $aluguel->cliente_id  = $request->idCliente;
        $aluguel->data_aluguel = $request->date;
        $aluguel->combustivel = $request->Combustivel;
        $aluguel->save();
        return redirect('/aluguel');
    }

}

