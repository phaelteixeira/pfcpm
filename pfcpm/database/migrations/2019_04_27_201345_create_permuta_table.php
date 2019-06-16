<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permuta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servico');
            $table->date('data');
            $table->time('hora_inicial');
            $table->time('hora_final');
            $table->text('comandante_servico');
            $table->text('descricao');
            $table->string('substituto');
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
        Schema::dropIfExists('permuta');
    }
}
