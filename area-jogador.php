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

        <section>
            <!-- Conteúdo da Página -->
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                        <h1 class="fonte-nav">Área do Jogador</h1>
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
              <form id="login-form" action="verificalogin.php" method="post" role="form" style="display: block;">
                       <center>
                       <h1 class="fonte-nav">Usuário: <?php echo $logado ?></h1>
                    
                    <div class="col-md-4">
                        <h3 class="fonte-nav">Partidas Jogadas: 23</h3>
                    </div>

                    <div class="col-md-4">
                        <h3 class="fonte-nav">Tempo de Jogo: 15.21 horas</h3>
                    </div>
                    <div class="col-md-4">
                        <h3 class="fonte-nav">Maior Pontuação: 6430</h3>
                    </div>

                    <div>
                        <h1 class="fonte-nav">TOP 5</h1>
                    <table class="table borderless">
                        
                        <tr>
                            <th>Posição</th>
                            <th>Usuário</th>
                            <th>Pontação Máxima (Modo Sobrevivência)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>estratos_tomate</td>
                            <td>12350</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>L0kAo</td>
                            <td>12020</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>rogi23</td>
                            <td>11910</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>duardinh0</td>
                            <td>11345</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>nathBranca</td>
                            <td>10320</td>
                        </tr>
                    </table>
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
