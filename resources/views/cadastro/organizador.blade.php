@extends('layout')

	@section('content')
		@include('assets.notifications')
		<h2>Cadastrar organizador</h2>
		<form method="POST" action="/cadastrar/organizador">
		{{csrf_field()}}
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="" required>
			</div>	

			<div class="form-group">
				<label for="cpf">CPF/CNPJ</label>
				<input type="text" class="form-control" name="cpf" id="cpf" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="cpf">Identificacao</label>
				<input type="text" class="form-control" name="identificacao" id="identificacao" placeholder="" required>
			</div>
			
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="telefone">Telefone</label>
				<input type="text" class="form-control" name="telefone" id="telefone" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="cep">CEP</label>
				<input type="number" class="form-control" name="cep" id="cep" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="logradouro">Logradouro</label>
				<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="numero">Numero</label>
				<input type="number" class="form-control" name="numero" id="numero" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="complemento">Complemento</label>
				<input type="text" class="form-control" name="complemento" id="complemento" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="bairro">Bairro</label>
				<input type="text" class="form-control" name="bairro" id="bairro" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="cidade">Cidade</label>
				<input type="text" class="form-control" name="cidade" id="cidade" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="estado">Estado</label>
				<input type="text" class="form-control" name="estado" id="estado" placeholder="" required>
			</div>

			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>

	@stop