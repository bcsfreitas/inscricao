<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->string('equipe')->nullable();
            $table->string('patrocinador')->nullable();
            $table->integer('telefone')->nullable();
            $table->string('nomeapoio')->nullable();
            $table->integer('telapoio')->nullable();
            $table->string('moto')->nullable();
            $table->string('filiacao')->nullable();
            $table->date('datanasc')->nullable();

            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('pilotos');
    }
}
