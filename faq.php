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
                            <li><a href="<?php echo $linkSessao ?>"><?php echo $stringLogin ?> </a></li> 
                            <li><a href="<?php echo $linkjogador ?>">Olá, <?php echo $logado ?></a></li>     
                    </ul>
				</div>
			</div>
		</nav>
		<!-- Conteúdo da Página -->
		<section>
			<div class="container" style="margin-top: 50px;">
			  	<div class="row">
					
			  		<div class="col-md-6 pull-right">
			  			<img src="images/demo2.png" alt="Imagem do jogo SPACE" class="img-responsive">
			  		</div>	
					<div class="col-md-6 pull-left">
					  <!-- Informações do FAQ -->		      
				      <h2 class="fonte-nav">FAQ</h2>
				      <p>Essa seção se trata das perguntas frequentes. </p>
				      <ul>
				      	<li><h4>O jogo estará para quais plataformas?</h4></li>
				      	<p> O jogo estará disponível para as plataformas Microsoft Windows e Android.</p>

				      	<li><h4>Quais são os requisitos mínimos do sistema para rodar o jogo?</h4></li>
				      	<p>Para Sistemas Microsoft Windows: <br/>
				      		- Processador: Quad-Core de 1,5 GHz <br/>
				      		- Memória RAM: 1GB <br/>
				      		- Memória Interna Disponível: 500MB</p>
				      	<p>Para Dispositivos Android: <br/>
							- Versão do Android: Android 4.1 (Kitkat) <br/>
				      		- Processador: Dual-Core de 1,2 GHz <br/>
				      		- Memória RAM: 1,5GB <br/>
				      		- Memória Interna Disponível: 500MB</p>

				      	<li><h4>Quando eu sair do jogo, a minha pontuação adquirida será zerada?</h4></li>
				      	<p>Não, sua pontuação será salva no jogo.</p>

				      	<li><h4>E caso eu apague o jogo do meu computador?</h4></li>
				      	<p>Caso você tenha criado uma conta no servidor do jogo, a sua pontuação será salva no servidor
			            para que na próxima vez em que você instalar o jogo e logar com a sua conta, sua pontuação e progresso continue lá.</p>
				      </ul>
				    </div>                  	
	        	</div>
	        </div>
	    </section>
  	</body>
</html>
