<!-- 
    Author: Victor Hugo Garcia de Oliveira
    23/02/2018
-->

<!DOCTYPE html>
<html>
	<!-- Cabeça -->
	<head>
		<!-- Meta e Título -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="text/html; IE=edge; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SPACE - Uma Aventura na Galáxia</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	    <link rel="stylesheet" type="text/css" href="css/login.css">
	    <link rel="stylesheet" type="text/css" href="css/modified.css"/>

	  	<!-- JS -->
	  	<script src="js/jquery-3.2.1.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	<script src="js/login.js"></script>

	  	<!-- PHP -->
		<?php
			include "sessao.php";
		?>

	</head>
	<!-- Corpo -->
	<body>
		<!-- Navbar -->
		<nav id="myNavbar" class="navbar navbar-default navbar-fixed-top fonte-nav" />
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			<!-- Logotipo -->		
					<a href="index.php"><img class="navbar-brand" src="images/logo.png" /></a>
				</div>

			<!-- Itens da Navbar -->	
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="nav navbar-nav navbar-right">

							<li><a href="index.php">Home </a></li>
		                    <li><a href="download.php">Download </a></li>
		                    <li><a href="suporte.php">Suporte </a></li>
		                    <li><a href="sobre.php">Sobre </a></li>
		                    <li><a href="faq.php">FAQ </a></li>   
		                    <li><a href="login.php">Login </a></li>	
		                    <li><a href="#">Olá, <?php echo $logado ?></a></li>		
		                </ul>
				</div>
			</div>
		</nav>
		<!-- Conteúdo da Página -->
		<section>
			<!-- Informações Sobre o Download -->
			<div class="container" style="margin-top: 50px;">
				<h1 class="fonte-nav">Download do Jogo</h1>
				<br/>

				<h4>Requisitos mínimos do sistema:</h4>
				<p>Para Sistemas Microsoft Windows: <br/>
					- Processador: Quad-Core de 1,5 GHz <br/>
					- Memória RAM: 1GB <br/>
				- Memória Interna Disponível: 500MB</p>


				<p>Para Dispositivos Android: <br/>
							- Versão do Android: Android 4.1 (Kitkat) <br/>
				      		- Processador: Dual-Core de 1,2 GHz <br/>
				      		- Memória RAM: 1,5GB <br/>
				      		- Memória Interna Disponível: 50MB</p>

				<br/>
				<!-- Botões de Download e Doação-->
				<button type="button" class="btn-lg btn-primary">Download Space (Windows)</button>
				<br/>
				<br/>
				<br/>

				<button type="button" class="btn-lg btn-success">Download Space (Android)</button>

				<br/>

				<h5>ou</h5>

				<br/>

				<!-- Colocar um evento JQuery aqui (Delimitar valores do Botão?) -->
				<form class="form-inline">
					<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Insira um Valor (em BRL)</label>
						<div class="input-group">
							<div class="input-group-addon">R$</div>
							<input type="text" class="form-control" id="exampleInputAmount" placeholder="Insira um Valor">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
					<button type="submit" class="btn btn-warning">Faça uma Doação*</button>
				</form>
				<h6><i>* Doações a partir de 1 BRL. </i></h6>
			</div>
		</section>
	</body>
</html>