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
    	<div class="container" style="margin-top: 50px;">  
			  <!--Colocar uma imagem aqui (?) -->
		      <h1 class="fonte-nav">Suporte</h1>
          <!-- Informações de Contato -->
		      <div class="col-md-8">
              <h4>Caso queira entrar em contato, sugerir mudanças ou pedir mais informações sobre o jogo, envie um email para example@lorem.com,
              ou preencha o formulário de envio abaixo.<br/>
              Em caso de algum bug ou falha no jogo, contacte-nos imediatamente usando o formulário para que possamos melhorar a experiência de jogo
              e corrigir esses bugs.<br/>
              </h4>      	
              <br/>
              <!-- Formulário de Contato -->                
              <form>
                <fieldset>
                  <legend class="fonte-nav" style="color: #CCCC14">Contato</legend>
                  <p>
                    <label for="nome">Nome: </label>
                    <input type=text class="form-control" id="nome" name=txtnome />
                  </p>
                  <p>
                    <label for="email">E-mail: </label>
                    <input type=email class="form-control" id="email" name=txtemail />
                  </p>
                  <p>
                    <label for="mensagem">Mensagem: </label>
                    <textarea type=text class="form-control" id="mensagem" name=txtmensagem rows="8"> </textarea>
                  </p>
                  
                  <button type="submit" class="btn-lg btn-primary">Enviar</button>
  			        </fieldset>
              </form>               
          </div>
        </div>  
    </section>
  </body>
</html>
