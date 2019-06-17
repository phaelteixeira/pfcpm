<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('escalado');
            $table->string('dia_do_servico');
            $table->string('hora_inicial');
            $table->string('hora_final');
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
        Schema::dropIfExists('dispensas');
    }
}
