<!-- 
    Author: Victor Hugo Garcia de Oliveira
    23/02/2018
-->

<!DOCTYPE html>
<html>
  <!-- Cabeça -->
  <head>
    <!-- Meta e Título -->
    <meta http-equiv="X-UA-Compatible" content="text/html; IE=edge; charset=ISO-8859-1">
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
        header("Content-Type: text/html; charset=ISO-8859-1");
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
    <section>
            <!-- Conteúdo da Página -->
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                        <h1 class="fonte-nav">Confirmação de Dados para Geração do Boleto</h1>
                        </center>
                    </div>
                </div>
                
                <div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel-pontuacao panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="gravaDadosDoacao.php" method="post" role="form" style="display: block;">
                       <center>
                       <h1 class="fonte-nav">Usuário: <?php echo $logado ?></h1>
                    
                    <div class="col-md-12">
                        <h3>Nome Completo: <?php echo $_SESSION['nomeDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                        <h3>CPF: <?php echo $_SESSION['cpfDoacao']; ?></h3>
                    </div>
                    <div class="col-md-12">
                        <h3>Código Postal: <?php echo $_SESSION['cepDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                        <h3>Endereço: <?php echo $_SESSION['logradouroDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                        <h3>Bairro: <?php echo $_SESSION['bairroDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                        <h3>Cidade: <?php  echo $_SESSION['localidadeDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                        <h3>Número da Casa: <?php echo $_SESSION['numCasaDoacao']; ?></h3>
                    </div>

                    <div class="col-md-12">
                      <h3>Se todos os dados estiverem corretos, clique no botão para a geração do boleto.
                      <br/>
                      Caso contrário, clique no botão para inserir novamente seus dados.</h3>
                    </div>
                    
                    <div class="col-md-12">
                        <a href="boleto.php">
                          <button type="submit" name="btnEnviarDoacao" value="Confirmar" class="btn btn-success">Enviar</button>
                        </a>


                      <a href="doacao.php">
                        <button type="submit" name="btnReinserirDoacao" value="Reinserir" class="btn btn-warning">Reinserir Dados</button>
                      </a>
                    </div>
                    </center>
                        
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
</div>
              </form>

                </div>

                </div>
            </div>
        </section>
  </body>
</html>