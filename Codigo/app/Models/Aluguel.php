<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $table = 'alugueis';

    protected $fillable = [
        'veiculo_id', 
        'cliente_id', 
        'valor_total', 
        'valor_pago', 
        'forma_pagamento', 
        'data_aluguel', 
        'data_devolucao', 
        'status'
    ];

}
