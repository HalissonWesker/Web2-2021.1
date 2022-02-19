<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome'
    ];

    public function aluguel(){
        return $this ->belongsTo('App\Models\Aluguel');
    }
}
