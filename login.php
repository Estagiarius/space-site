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
                            <li><a href="area-jogador.php">Olá, <?php echo $logado ?></a></li>     
                    </ul>
        </div>
      </div>
    </nav>
    <!-- Conteúdo da Página -->
    <div class="container">
       <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <!-- Formulário de Login/Cadastro -->
                  <form id="login-form" action="verificalogin.php" method="post" role="form" style="display: block;">
                    <h2 class="fonte-nav">LOGIN</h2>
                      <div class="form-group">
                        <input type="text" name="txtUsernameLog" id="username" tabindex="1" class="form-control" placeholder="Nome de Usuário" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="txtPasswordLog" id="password" tabindex="2" class="form-control" placeholder="Senha">
                      </div>
                      <div class="col-xs-6 form-group pull-left checkbox">
                        <input id="checkbox1" type="checkbox" name="remember">
                        <label for="checkbox1">Lembre-se de Mim</label>   
                      </div>
                      <div class="col-xs-6 form-group pull-right">     
                            <input type="submit" name="btnLogin" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Login">
                      </div>
                  </form>
                  <form id="register-form" action="cadastro.php" method="post" role="form" style="display: none;">
                    <h2 class="fonte-nav">CADASTRO</h2>
                      <div class="form-group">
                        <input type="text" name="txtUsernameCad" id="username" tabindex="1" class="form-control" placeholder="Nome de Usuário" value="">
                      </div>
                      <div class="form-group">
                        <input type="email" name="txtEmailCad" id="email" tabindex="1" class="form-control" placeholder="Endereço de E-mail" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="txtPasswordCad" id="password" tabindex="2" class="form-control" placeholder="Senha">
                      </div>
                      <div class="form-group">
                        <input type="password" name="txtConfPasswordCad" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirme a senha">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="btnCadastro" id="register-submit" tabindex="4" class="form-control btn btn-register" value="CADASTRAR">
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6 tabs">
                  <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
                </div>
                <div class="col-xs-6 tabs">
                  <a href="#" id="register-form-link"><div class="register">CADASTRO</div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>