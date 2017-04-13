@extends('layout')
	@section('content')

		<h1 class="nome-organizador">Bem-vindo</h1>
		<div class="dados-organizador">
			testeteste	
		</div>
		<div class="lista-organizador"> 
			<ul>	
			@foreach($eventos as $evento)
				<li>
					<a href="eventos/{{$evento->id}}">
						<h3>{{$evento->nome}}</h3>
						<p>{{$evento->local}} - {{$evento->data}}</p>
					</a>
				</li>
			@endforeach
			</ul>
		</div>

	@stop