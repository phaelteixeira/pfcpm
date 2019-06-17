<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('matricula');
            $table->string('local');
            $table->string('dia_do_servico');
            $table->string('hora_inicial');
            $table->string('hora_final');
            $table->string('escalado');
            $table->string('escaladoMatricula');
            $table->string('escaladoLocal');
            $table->string('escaladoDia_do_servico');
            $table->string('escaladoHora_inicial');
            $table->string('escaladoHora_final');
            $table->string('virtude');
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
        Schema::dropIfExists('permutas');
    }
}
