<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;


    // Exibe todos os clientes cadastrados na tabela clientes
class ClienteController extends Controller
{

    public function show(){
        $clientes = cliente::all();
        echo $clientes;

    }
}
