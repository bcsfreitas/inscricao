<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventosController extends Controller
{
	public function index() {
		$eventos = Eventos::all();
		return compact(eventos);
	}

	public function visualizar($id) {
		$evento = Evento::find($id);
		return $evento;
	}

	public function deletar(Request $request) {
		$id = $request->input('id');
		Evento::destroy($id);
		return redirect('eventos')->with('msg', 'Evento deletado com sucesso');
	}

	public function salvar(Request $request) {
      $parametros = $request->except('_token');
      $piloto = Evento::create($parametros);
      return redirect('/eventos')->with('msg', 'Evento criado com sucesso');
	}

	public function editar($id){
		$piloto = Evento::find('$id');
		return view('eventos/form')->with('piloto', $piloto);
	}
}
