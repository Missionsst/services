<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';  
            
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique()->nullable();
            $table->bigInteger('cpf')->unique()->nullable();
            $table->string('rg')->unique();
            $table->date('dataNasc')->nullable();    
            $table->bigInteger('telefone');
            $table->bigInteger('celular');
            $table->string('logradouro')->nullable();
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro')->nullable();
            $table->string('referencia');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->date('cadastroConfirmado')->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
