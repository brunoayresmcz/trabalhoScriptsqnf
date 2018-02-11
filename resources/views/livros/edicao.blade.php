	@extends('template')
	
	@section('conteudo_principal')
	<h1>Cadastro de Livros</h1>

	<!-- ERRO NO CADASTRO -->
	<div class="alert alert-danger">
		<strong>Erro!</strong>
		<p> Informe o título do livro</p>
	</div>
	<!-- [FIM] ERRO -->


	<form action="{{route('livros.atualizar')}}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<!-- ISBN -->
		<div class="form-group">
			<label for="campo-isbn">ISBN:</label>
			<input type="number" class="form-control" id="campo-isbn">
		</div>
		
		<!-- TITULO -->
		<div class="form-group">
			<label for="campo-titulo">Título:</label>
			<input type="text" class="form-control" id="campo-titulo">
		</div>
			
		<!-- AUTOR -->
		<div class="form-group">
			<label for="campo-email">Autor:</label>
			<input type="email" class="form-control" id="campo-email">
		</div>

		<!-- CATEGORIA -->
		<div class="form-group">
			<label for="campo-categoria">Categoria:</label>
			<select class="form-control" name="categoria" id="campo-categoria">
				<option value="1">Terror</option>
				<option value="2">Drama</option>
				<option value="3">Romance</option>
				<option value="4">Ficção Científica</option>
				<option value="5">Pintura</option>
			</select>
		</div>
			
		<!-- RESUMO -->
		<div class="form-group">
			<label for="campo-resumo">RESUMO:</label>
			<textarea class="form-control" id="campo-resumo" name="resumo"></textarea>
		</div>
			
		<!-- RESUMO -->
		<div class="form-group">
			<label for="campo-capa">Capa:</label>
			<input type="file" id="campo-capa" name="capa"/>

			<br/>
			<img src="http://lorempixel.com/200/200" class="img-rounded">
		</div>

		<button type="submit" class="btn btn-default">Cadastrar</button>				
	</form>
	@endsection