<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
			
			$table->engine = 'InnoDB';	
			
			$table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('nome')->nullable();
            $table->longText('descricao')->nullable();
            $table->integer('qtdePessoas')->nullable();
            $table->date('dataInicio')->nullable();
			$table->time('horaInicio')->nullable();
			$table->date('dataFim')->nullable();
			$table->time('horaFim')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
       Schema::dropIfExists('evento');
    }
}
