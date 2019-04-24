<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('matricula');
            $table->integer('pelotao');
            $table->string('servico');
            $table->date('data_servico');
            $table->time('hora_inicial');
            $table->time('hora_final');
            $table->text('descricao');
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
        Schema::dropIfExists('dispensa');
    }
}
