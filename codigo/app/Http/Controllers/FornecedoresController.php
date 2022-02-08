<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    //Função mostrar todos os fornecedores
    public function show()
    {
        $fornecedores = Fornecedor::all();

        echo $fornecedores;
    }
}
