<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Piloto;


class PilotosController extends Controller
{
	

	public function index(){
		$pilotos = Piloto::all();

		return view('pilotos.index')->with('pilotos', $pilotos);
	}

	public function deletar(Request $request) {
		$id = $request->input('id');
		Piloto::destroy($id);

		return redirect('pilotos')->with('msg', 'Piloto deletado com sucesso');

	}

	public function visualizar($id) {
		$piloto = Piloto::find($id);

		return view('piloto')->with('piloto', $piloto);
	}



}
