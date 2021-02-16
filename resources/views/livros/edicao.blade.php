@extends('template')

@section('titulo', 'Edição do Livro ' . $livro['titulo'])

@section('conteudo_principal')
		<h1>Edição de Livros</h1>

		@if($errors->any())
		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif

		<form action="{{route('livros.editar', ['id' => $livro['id']])}}" method="post" enctype="multipart/form-data">
			@csrf
			@include('livros._shared.form')
			<button type="submit" class="btn btn-default">Editar</button>				
		</form>
@endsection