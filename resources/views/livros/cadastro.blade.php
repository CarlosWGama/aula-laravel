@extends('template')
	
@section('titulo', 'Cadastro de Livro')

@section('conteudo_principal')
		<h1>Cadastro de Livros</h1>

		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			<p> Informe o título do livro</p>
		</div>
		<!-- [FIM] ERRO -->


		<form action="{{route('livros.cadastrar')}}" method="post" enctype="multipart/form-data">
			@csrf
			@include('livros._shared.form')
			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
@endsection