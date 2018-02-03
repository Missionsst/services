<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id')->nullable();
            $table->integer('contratado')->nullable();
            $table->double('nota')->nullable();
            $table->string('obs')->nullable();
            $table->date('dataNota')->nullable();
            $table->date('dataCadastro');
            $table->date('dataConfirmado');
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
        Schema::dropIfExists('contratados');
    }
}
