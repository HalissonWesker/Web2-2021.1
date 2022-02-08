<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;


class FuncionarioController extends Controller
{
    public function show(){


        $funcionarios = Funcionario::all();

        return view('funcionarios.viewFuncionarios', ['funcionarios' => $funcionarios]);



    }


    public function regist(){
        return view('funcionarios.criar');
        
    }

    public function store(Request $request){

        $funcionario = new Funcionario;

        $funcionarios = $request->nome;
        $funcionarios = $request->cpf;


        $funcionarios ->save();
        
        return redirect('funcionarios.viewFuncionario');

    }
}
