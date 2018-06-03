<!-- 
    Author: Victor Hugo Garcia de Oliveira
    23/02/2018
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		//Validação de Sessão
		if (session_status() !== PHP_SESSION_ACTIVE) SESSION_START();

			//Verificar se a sessão está
			if((!isset ($_SESSION['userLogin']) == true) and (!isset ($_SESSION['userPass']) == true)){
				unset($_SESSION['userLogin']); 
				unset($_SESSION['userPass']); 
				$logado = 'Visitante';
			}
			else $logado = $_SESSION['userLogin'];
	?>

</head>

<body>
	<nav id="myNavbar" class="navbar navbar-default navbar-fixed-top fonte-nav" />
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                <a href="index.php"><img class="navbar-brand" src="images/logo.png" /></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav navbar-nav navbar-right">

					<li><a href="index.php">Home </a></li>
                    <li><a href="download.php">Download </a></li>
                    <li><a href="suporte.php">Suporte </a></li>
                    <li><a href="sobre.php">Sobre </a></li>
                    <li><a href="faq.php">FAQ </a></li>   
                    <li><a href="login.php">Login </a></li>	
                    <li><a href="#"><?php echo $logado ?></a></li>		
                </ul>
		</div>
	</div>
</nav>

<section>
	<div class="container" style="margin-top: 50px;">
		<h1 class="fonte-nav">Download do Jogo</h1>

		<!--p>Baixe Space: Uma Aventura no Espaço usando o botão de download logo abaixo e se você se sentir generoso, pague um cafézinho aos programadores do jogo.</p-->

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
		      		- Memória Interna Disponível: 500MB</p>

		<br/>


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