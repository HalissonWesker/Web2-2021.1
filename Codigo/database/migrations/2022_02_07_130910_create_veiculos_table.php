<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('ano');
            $table->string('modelo');
            $table->string('placa');
            $table->decimal('valor_seguro', 10, 2);
            $table->decimal('valor_diaria', 10, 2);
            $table->enum('status', ['ALUGADO', 'DISPONIVEL'])->default('DISPONIVEL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
