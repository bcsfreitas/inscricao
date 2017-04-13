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
		return view('piloto')->with(compact($piloto));
	}

	public function salvar(Request $request) {
      $parametros = $request->except('_token');
      $piloto = Piloto::create($parametros);
      return redirect('/pilotos')->with('msg', 'Piloto criado com sucesso');
	}

	public function editar($id){
		$piloto = Piloto::find('$id');
		return view('pilotos/form')->with('piloto', $piloto);
	}


}