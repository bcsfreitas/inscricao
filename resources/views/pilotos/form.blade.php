@extends('layout')

	@section('content')
	
	<h1>Novo piloto</h1>
	
		<form action="/pilotos" method="post">
			{{csrf_field()}}
			@if(isset($piloto->id))
				<input type="hidden" name="id" value="{{$piloto->id}}">
				<input type="hidden" name="_method" value="put">
			@endif
			<div class="form-group">
				<label for="nome">Nome
					<input name="nome" id="nome" type="text" value="{{$piloto->nome}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="cpf">CPF
					<input name="cpf" id="cpf" type="text" value="{{$piloto->cpf}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="equipe">Equipe
					<input name="equipe" id="equipe" type="text" value="{{$piloto->equipe}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="moto">Moto
					<input name="moto" id="moto" type="text" value="{{$piloto->moto}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="patrocinador">Patrocinador
					<input name="patrocinador" id="patrocinador" type="text" value="{{$piloto->patrocinador}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="telefone">Telefone
					<input name="telefone" id="telefone" type="text" value="{{$piloto->telefone}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="nomeapoio">Nome do Apoio
					<input name="nomeapoio" id="nomeapoio" type="text" value="{{$piloto->nomeapoio}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="telapoio">Telefone do Apoio
					<input name="telapoio" id="telapoio" type="text" value="{{$piloto->telapoio}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="filiacao">Filiação
					<input name="filiacao" id="filiacao" type="text" value="{{$piloto->filiacao}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="datanasc">Data de nascimento
					<input name="datanasc" id="datanasc" type="text" value="{{$piloto->datanasc}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="cep">CEP
					<input name="cep" id="cep" type="text" value="{{$piloto->cep}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="logradouro">Logradouro
					<input name="logradouro" id="logradouro" type="text" value="{{$piloto->logradouro}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="numero">Número
					<input name="numero" id="numero" type="text" value="{{$piloto->numero}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="complemento">Complemento
					<input name="complemento" id="complemento" type="text" value="{{$piloto->complemento}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="bairro">Bairro
					<input name="bairro" id="bairro" type="text" value="{{$piloto->bairro}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="cidade">Cidade
					<input name="cidade" id="cidade" type="text" value="{{$piloto->cidade}}" class="form-control"></label>
			</div>
			<div class="form-group">
				<label for="estado">Estado
				<select name="estado" type="text">
					<option value="MG">MG</option>	
					<option value="MG">SP</option>	
					<option value="MG">BA</option>	
					<option value="MG">RJ</option>	
				</select>
				</label>
			</div>
			<button type="submit" value="CADASTRAR">CADASTRAR</button>
		</form>

	@stop