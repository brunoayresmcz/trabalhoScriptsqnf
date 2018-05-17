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
		@include('livros.shared._formulario')
		<button type="submit" class="btn btn-default">Editar</button>				
	</form>
	@endsection