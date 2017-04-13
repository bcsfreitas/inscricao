<?php

namespace App;

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
