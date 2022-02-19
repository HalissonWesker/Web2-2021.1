<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{


   /* Mostrar clientes na tabela */
   public function index(){

    $clientes = Cliente::all();

    return view('clientes.viewClientes', ['clientes' => $clientes]);
   }


   public function store(Request $request){
   
      $clientevalidate = Cliente::where('telefone', $request->telefone)->get();
      if(count($clientevalidate)){
         return redirect()->route('cadastrocliente')->with('error', 'Telefone já cadastrado');
      }
      $clientevalidate = Cliente::where('email', $request->email)->get();

      if(count($clientevalidate)){
         return redirect()->route('cadastrocliente')->with('error', 'Email já cadastrado');
         }
      


      $cliente = new Cliente;

      $cliente->nome = $request->nome;
      $cliente->email = $request->email;
      $cliente->endereco = $request->endereco;
      $cliente->telefone = $request->telefone;
   
      $cliente->save();

    
      return redirect()->route('cliente.index')->with('succes', 'Cliente cadastrado com sucesso!');
      

   }

   public function destroy($id){
      Cliente::find($id)->delete();
      return redirect()->route('cliente.index')->with('succes', 'Cliente excluido com sucesso!');
   }


   public function create($id){
      $clientes = Cliente::find($id);

      return view('clientes.atualizarclientes', ['clientes' => $clientes]);
   }



   public function update(Request $request){
      $cliente= Cliente::find($request->id);
      $cliente->nome = $request->nome;
      $cliente->email = $request->email;
      $cliente->endereco = $request->endereco;
      $cliente->telefone = $request->telefone;
      $cliente->save();

      return redirect()->route('cliente.index')->with('success', 'Cadastrado atualizado com sucesso!');
    

   }
}

