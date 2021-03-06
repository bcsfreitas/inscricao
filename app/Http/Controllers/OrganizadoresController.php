<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Organizador;
use App\Evento;

class OrganizadoresController extends Controller
{
    public function index(){
		$organizadores = Organizador::all();
		return view('organizadores.index')->with('organizadores', $organizadores);
	}
    public function salvar(Request $request) {
    	$this->validate(request(), [
    		'nome' => 'required|max:255',
    		'cpf' => 'required|max:12',
    		'identificacao' => 'required|max:255',
    		'email' => 'required|max:255', 
    		'telefone' => 'required|max:100', 
		    'cep' => 'required|max:9', 
		    'logradouro' => 'required|max:255', 
		    'numero' => 'required|max:5', 
		    'complemento' => 'required|max:255', 
		    'bairro' => 'required|max:255', 
		    'cidade' => 'required|max:255', 
		    'estado' => 'required|max:5', 
    	]);
    	$parametros = $request->except('_token');
    	$organizador = Organizador::create($parametros);
    	return redirect('/organizadores')->with('msg', 'Organizador criado com sucesso');
	}

	public function visualizar() {
		$user = Auth::user();
		$id = Auth::user()->id;
		$eventos = Evento::where('id', $id)->orderBy('created_at', 'desc')->get();
		return view('organizadores.lista')->with([
			'eventos' => $eventos
			]);
	}
}
