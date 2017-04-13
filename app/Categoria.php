<?php
namespace App;

class Categoria extends Model
{
    public function evento() {
    	return $this->belongsTo(Evento::class);
    }
}
