<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ano',
        'modelo',
        'placa',
        'valor_seguro',
        'valor_diaria'
    ];

    public function aluguel(){
        return $this ->belongsTo('App\Models\Aluguel');
    }
}
