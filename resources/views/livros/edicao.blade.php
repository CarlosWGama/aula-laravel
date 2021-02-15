@extends('template')

@section('titulo', 'Edição do Livro ' . $livro['titulo'])

@section('conteudo_principal')
		<h1>Edição de Livros</h1>

		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			<p> Informe o título do livro</p>
		</div>
		<!-- [FIM] ERRO -->


		<form action="{{route('livros.editar', ['id' => $livro['id']])}}" method="post">
			@include('livros._shared.form')
			<button type="submit" class="btn btn-default">Editar</button>				
		</form>
@endsection