<?php
namespace App;

class Evento extends Model
{
    public function categorias() {
    	return $this->hasMany(Categoria::class);
    }
}
