	@extends('template')
	
	@section('conteudo_principal')
	<h1>Edição de Livros</h1>

	<!-- ERRO NO CADASTRO -->
	@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro!</strong>
		@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
    </div>
	@endif
	<!-- [FIM] ERRO -->

	<form action="{{route('livros.atualizar', ['id' => $livro->id])}}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<!-- ISBN -->
		<div class="form-group">
			<label for="campo-isbn">ISBN:</label>
			<input type="number" class="form-control" id="campo-isbn" name="isbn" value="{{old('isbn', $livro->isbn)}}">
		</div>
		
		<!-- TITULO -->
		<div class="form-group">
			<label for="campo-titulo">Título:</label>
			<input type="text" class="form-control" id="campo-titulo"  name="titulo" value="{{old('titulo', $livro->titulo)}}">
		</div>
			
		<!-- AUTOR -->
		<div class="form-group">
			<label for="campo-autor">Autor:</label>
			<input type="text" class="form-control" id="campo-autor"  name="autor" value="{{old('autor', $livro->autor)}}">
		</div>

		<!-- CATEGORIA -->
		<div class="form-group">
			<label for="campo-categoria">Categoria:</label>
			<select class="form-control" name="categoria" id="campo-categoria">
				<option value="1" @if(old('categoria', $livro->categoria) == 1) selected @endif>Terror</option>
				<option value="2" @if(old('categoria', $livro->categoria) == 2) selected @endif>Drama</option>
				<option value="3" @if(old('categoria', $livro->categoria) == 3) selected @endif>Romance</option>
				<option value="4" @if(old('categoria', $livro->categoria) == 4) selected @endif>Ficção Científica</option>
				<option value="5" @if(old('categoria', $livro->categoria) == 5) selected @endif>Pintura</option>
			</select>
		</div>
			
		<!-- RESUMO -->
		<div class="form-group">
			<label for="campo-resumo">RESUMO:</label>
			<textarea class="form-control" id="campo-resumo" name="resumo">{{old('isbn', $livro->isbn)}}</textarea>
		</div>
			
		<!-- RESUMO -->
		<div class="form-group">
			<label for="campo-capa">Capa:</label>
			<input type="file" id="campo-capa" name="capa"/>

			<br/>
			@if ($livro->capa)
			<img src="{{url('storage/livros/'.$livro->capa)}}" class="img-rounded">
			@endif
		</div>

		<button type="submit" class="btn btn-default">Editar</button>				
	</form>
	@endsection