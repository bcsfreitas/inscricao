<?php

use Illuminate\Database\Seeder;

class PilotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pilotos')->insert([
            'nome' => str_random(10),
            'cpf' => str_random(10),
            'equipe' => str_random(10),
            'patrocinador' => str_random(10),
            'telefone' => str_random(10),
            'nomeapoio' => str_random(10),
            'telapoio' => str_random(10),
            'moto' => str_random(10),
            'filiacao' => str_random(10),
            'datanasc' => str_random(10),
            'cep' => str_random(10),
            'logradouro' => str_random(7),
            'numero' => str_random(3),
            'complemento' => str_random(3),
            'bairro' => str_random(10),
            'cidade' => str_random(10),
            'estado' => str_random(2),
        ]);
    }
}
