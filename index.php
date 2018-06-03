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

		<section>
			<!-- Conteúdo da Página	-->
			<!-- Jumbotron: Imagem (4 col) + Info (8 col) -->
			<div class="jumbotron img-rounded col-md-12" style="margin-top: 50px;">
				<div class="row">
					<div class="col-md-4">
						<img src="images/merchan.png" class="img-responsive" >
					</div>
					<div class="col-md-8 jumbotext">
						<h1 class="fonte-nav">Space - Uma Guerra na Galáxia</h1>
						<p>A história se passa na Via Láctea, no ano de 3200. A Terra fez uma descoberta de vida em todos os planetas da galáxia, fazendo com que as curiosidades falem mais alto e se inicie uma exploração, para a averiguação de inteligência dos “aliens”. Isso desencadeia uma guerra que envolve todo o futuro de uma galáxia. Direto do Planeta Pesadown, localizado na Galáxia Andrômeda, o astronauta Inhegas vem para selar a paz entre os planetas, por bem ou por mal.</p>
						<br/>
						<br/>
						<center> <a href="download.php" type="button" class="btn-lg btn-success" >Baixe Agora </a> </center>	
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
