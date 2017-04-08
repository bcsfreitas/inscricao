<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    protected $table = 'organizadores';
    protected $fillable = [
    'nome', 
    'cpf', 
    'identificacao', 
    'email', 
    'telefone', 
    'cep',
    'logradouro',
    'numero',
    'complemento',
    'bairro',
    'cidade',
    'estado'
    ];
}
