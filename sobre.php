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
                <!-- História do Jogo -->
    		    <h1 class="text-center fonte-nav">Sobre o Jogo</h1>
                <h2 class="text-center fonte-nav">História</h2>
                <p class="text-justify">Após milhares de anos de pesquisas, o planeta Terra finalmente encontra vida em outro lugar, mas não esperavam que fossem em todos os planetas da galáxia. Sem muito conhecimento, uma exploração em cima dos aliens se inicia.
                No meio de uma dessas explorações, uma guerra dentro da galáxia se inicia.
                O astronauta Inhegas, vindo da galáxia de Andromeda, vê a situação e começa
                a lutar pela paz entre os planetas. Por trás desses inimigos que lutam contra Inhegas,
                existe a influência do Dominador Supremo, que tenta detê-lo a qualquer custo.       
                </p>
                <!-- Personagens -->
                <h2 class="text-center fonte-nav">Personagens</h2>
            
                <h3 class="col-4 fonte-nav">Inhegas</h3>
                <p class="col-8">No jogo, você joga com o Inhegas, o às supremo do Planeta
                Pesadown. O seu objetivo é vencer as oito fases, salvando a galáxia
                dos terrores dos inimigos e a libertando do mal do Dominador Supremo.
                </p>
                    
                <div class="col-md-4">
                    <h3 class="text-left fonte-nav">Gorkins</h3>
                    <br/>
                    <br/>
                    <img src="images/gorkin.png" style="float: left;" alt="Nave Gorkin"/>
                    <p class=" text-right">Os Gorkins são a frota de perseguição do exército, e
                    podem ser identificados pela sua coloração vermelha. Foram 
                    treinados para serem persistentes, sempre seguindo o inimigo.</p>
                </div>
                   
                <div class="col-md-4">
                    <h3 class="text-left fonte-nav">Jackals</h3>
                    <br/>
                    <br/>
                    <img src="images/jackal.png" style="float: left;"  alt="Nave Jackal"/>
                    <p class="text-right">Os Jackals são a frota de velocidade do exército, geralmente azuis,
                    são os mais velozes e treinados nas artes de desvio de tiros comuns.
                    Rápidos como são, chegam ao inimigo facilmente, sem dar tempo para reações.
                    </p>
                </div>
                    
                <div>
                    <h3 class="text-left fonte-nav">Torídios</h3>
                    <br/>
                    <br/>
                    <img src="images/toridio.png" style="float: left;" alt="Nave Torídia"/>
                    <p class="text-right">Os Torídios são a frota de ataque massivo do exército,
                    tendo como arma mortal a sua mutabilidade. Quando estão perto da
                    destruição, se separam em dois Gorkins, o que os fazem mortais.
                    Dizem pela galáxia que poucas pessoas sobreviveram a um ataque grande
                    de Torídios para contar a história.</p>
                </div>
            </div>
        </section>



    </body>
    </html>
