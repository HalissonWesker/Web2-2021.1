<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $table = 'alugueis';

    protected $dates =[
        'data_aluguel',
        'valor_adicional'
    ];

    protected $fillable = [
        'veiculo_id', 
        'cliente_id', 
        'valor_total', 
        'valor_pago',
        'valor_adicional', 
        'notas',
        'forma_pagamento',
        'combustivel',
        'data_aluguel', 
        'data_devolucao', 
        'status'
    ];

    public function clientes(){
        return this->hasMany('App\Models\Cliente');

    }

    public function veiculos(){
        return this->hasMany('App\Models\Veiculo');

    }

}
