<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    protected $fillable = ['nome', 'cpf', 'equipe', 'patrocinador', 'telefone', 'nomeapoio', 'telapoio', 'moto', 'filiacao', 'datanasc', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado'];
}
