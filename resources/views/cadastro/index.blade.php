@extends('layout')

	@section('content')
	<h2 class="text-center">Tipo de cadastro</h2>
	<div class="row">
		<div class="col-lg-6 text-center">
			<a href="cadastro/piloto"  class="btn btn-primary">PILOTO</a>
		</div>
		<div class="col-lg-6 text-center">
			<a href="cadastro/organizador" class="btn btn-primary">ORGANZIADOR</a>
		</div>
	</div>
	@stop