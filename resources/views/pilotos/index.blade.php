@extends('layout')

@section('content')
<div class="wrapper-md">
	<div class="panel panel-default">
		<div class="panel-heading">
			Lista de pilotos
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
						@foreach($pilotos as $p)
						<tr>
							<td>{{$p->id}}</td>
							<td>{{$p->cpf}}</td>
							<td>{{$p->nome}}</td>
							<td>
								<a class="btn btn-warning" href="/pilotos/{{$p->id}}">></a>
								<!-- <form style="display: inline-block" class="" action="/pilotos" method="post">
						          <input type="hidden" name="_method" value="delete" />
						          {{csrf_field()}}
						          <input type="hidden" name="id" value="{{$p->id}}" />
						          <input type="hidden" name="nome" value="{{$p->nome}}" />
						          <button type="submit" style="font-size: 0.9em" class="btn btn-danger" name="button">EXCLUIR</button>
						        </form> -->
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