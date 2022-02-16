<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlugueisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    //mudado por lucas
        Schema::create('alugueis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("veiculo_id");
            $table->unsignedBigInteger("cliente_id");
            $table->float('valor_total')->nullable();// só na devolução
            $table->float('valor_pago')->nullable();// idem
            $table->float('valor_adicional')->nullable();// caso acidente 
            $table->string('notas')->nullable();// notas são sempre uteis
            $table->string('forma_pagamento')->nullable();// devolucao
            $table->float('combustivel');// para cobrar combustivel não abastecido
            $table->timestamp('data_aluguel');
            $table->timestamp('data_devolucao')->nullable();
            $table->enum('status', ['aguardando', 'finalizado'])->default('aguardando');
            $table->timestamps();

            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alugueis');
    }
}
