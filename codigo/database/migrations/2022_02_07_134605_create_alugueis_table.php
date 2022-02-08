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
    {
        Schema::create('alugueis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('valorTotal');
            $table->float('valorPago');
            $table->string('formaPagamento');
            $table->dateTime('dataAluguel');
            $table->dateTime('dataDevolucao');
            $table->string('status');
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
