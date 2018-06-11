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
            $userLogin = $_SESSION['userLogin'];
            include "sessao.php";
            include "conexao.php";
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
                <h1>Central de Doação</h1>
                <h2>Muito obrigado por contribuir! Seus últimos boletos estão na listagem abaixo!</h2>

                <table>
                    <th>Data de Geração</th>
                    <th>Valor</th>
                </table>
                <?php 
                    


            </div>
        </section>
    </body>
</html>
