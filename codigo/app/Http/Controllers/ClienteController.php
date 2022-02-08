<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{


   /* Mostrar clientes na tabela */
   public function show(){

    $cliente = Cliente::all();

    return view('/clientes', ['cliente' -> $cliente]);
   }


   public function store(Request $request){
   
      $cliente = new Cliente;

      $cliente->nome = $request->nome;
      $cliente->email = $request->nome;
      $cliente->endereco = $request->endereco;
      $cliente->nome = $request->nome;
   
      $cliente->save();

      

   }

   public function distroy(){


   }
}

