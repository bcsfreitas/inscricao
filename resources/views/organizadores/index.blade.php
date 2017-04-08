@extends('layout')
	@section('content')
	<div class="wrapper-md">
		<div class="panel panel-default">
			<div class="panel-heading">
				Lista de organizadores
			</div>
				<div class="panel-body">
				<table class="table table-striped b-t b-light">
						<thead>
							<tr>
								<th>Id</th>
								<th>CPF</th>
								<th>Nome</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($organizadores as $organizador)
							<tr>
								<td>{{$organizador->id}}</td>
								<td>{{$organizador->cpf}}</td>
								<td>{{$organizador->nome}}</td>
								<td>
									<a class="btn btn-warning" href="/organizador/{{$organizador->id}}">></a>
									
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-sm-4 hidden-xs">               
						</div>
					</div>
				</footer>

		</div>
	</div>

	@stop