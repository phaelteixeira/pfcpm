<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_mat');
            $table->string('nome');
            $table->string('endereço');
            $table->string('rg');
            $table->string('cpf');
            $table->string('senha');
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
        Schema::dropIfExists('policials');
    }
}
