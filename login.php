<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPACE - Uma Aventura na Galáxia</title>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/login.css" >
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

<!-- link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" -->

<!-- Usar esse site como referência: "https://bootsnipp.com/snippets/kE9rg" -->

<body class="login">

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

<div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
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
<footer>
    
</footer>

</body>

</html>