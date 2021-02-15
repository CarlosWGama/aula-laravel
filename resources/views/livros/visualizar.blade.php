<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Livros</title>
	
	<!-- JQUERY -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
		
				<!-- SEÇÃO LIVROS -->
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Livros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{route('livros.listar')}}">Listar</a></li>
						<li class="active"><a href="{{route('livros.novo')}}">Cadastrar</a></li>
					</ul>
				</li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
			</ul>
		</div>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
	<!-- CONTEUDO PRINCIPAL [INICIO] -->
	<div class="jumbotron">

		<!-- TITULO -->
		<div class="page-header">
			<h1>{{$livro['titulo']}}</h1>
			<span class="label label-primary">{{$livro['autor']}}</span>
			<span class="label label-default">Terror</span>
		</div>

		<!-- DESCRICAO -->
		<div id="resumo-livro">
			<p>{{$livro['resumo']}}</p>
		</div>
	</div>
	<br/>
</body>
</html>