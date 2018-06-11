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

                            <li><a href="index.php">Voltar para a Home</a></li>
                    </ul>
        </div>
      </div>
    </nav>
    <!-- Conteúdo da Página -->
    <div class="container">
        <div class="row">
            <center>
                <h3>
                    Muito obrigado pela sua doação!
                    <br/>
                    Para que nós possamos gerar o boleto, precisamos que você insira os dados abaixo.
                </h3>
            </center>
        </div>

       <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <!-- Formulário de Login/Cadastro -->
                  <!-- Criar PHP p/ Login Doador e Cadastro Doador -->
                  <form id="login-form" action="validaDadosDoacao.php" method="post" role="form" style="display: block;">
                    <h2 class="fonte-nav">LOGIN</h2>
                      <div class="form-group">
                        <input type="text" name="txtCpfDoacao" id="cpf" tabindex="1" class="form-control" placeholder="CPF">
                      </div>
                      <div class="form-group">
                        <input type="text" name="txtNomeDoacao" id="nome" tabindex="2" class="form-control" placeholder="Nome Completo do Doador">
                      </div>
                      <div class="form-group">
                        <input type="text" name="txtCepDoacao" id="cep" tabindex="2" class="form-control" placeholder="CEP do Doador">
                      </div>
                      <div class="form-group">
                        <input type="text" name="txtNumCasa" id="numcasa" tabindex="2" class="form-control" placeholder="Número da Casa">
                      </div>
                      <div class="col-xs-6 form-group pull-right">     
                            <input type="submit" name="btnDadosDoacao" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Enviar">
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>