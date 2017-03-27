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
            $table->integer('userid');
            $table->string('nome');
            $table->string('cpf');
            $table->string('equipe');
            $table->string('patrocinador');
            $table->integer('telefone');
            $table->string('nomeapoio');
            $table->integer('telapoio');
            $table->string('moto');
            $table->string('filiacao');
            $table->date('datanasc');

            $table->string('cep');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
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
