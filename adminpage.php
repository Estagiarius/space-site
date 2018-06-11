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
            include "conexao.php";
            include "adminsessao.php";

           // if($logado == 'Intruso') echo "<script> alert('Você não está autorizado a acessar essa área!' </script>;
            //        location = 'index.php'";

            $queryNumCadastros = mysqli_query($con, "SELECT COUNT(1) AS numCadastros FROM jogador");

            $row = mysqli_fetch_assoc($queryNumCadastros); 
            $numCadastros = $row['numCadastros'];


            $queryNumDoadores = mysqli_query($con, "SELECT COUNT(DISTINCT ID_JOGADOR_DOADOR) AS numDoadores FROM doador");

            $row = mysqli_fetch_assoc($queryNumDoadores);
            $numDoadores = $row['numDoadores'];

            $queryValorDoacao = mysqli_query($con, "SELECT SUM(VALOR_DOACAO) AS valorDoacao FROM doador");

            $row = mysqli_fetch_assoc($queryValorDoacao);
            $valorDoadores = $row['valorDoacao'];

            echo mysqli_error($con);

            mysqli_close($con);

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

                            <li><a href="index.php">Página do Jogo</a></li>
                            <li><a href="#">Olá, <?php echo $logado ?></a></li>     
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <!-- Conteúdo da Página -->
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Área do Administrador</h1>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-md-6 jumbotron">

                        <h2>Estatísticas de Cadastro:</h2>

                        <h3>Número de Cadastros Atuais: <?php echo $numCadastros ?></h3>
                    </div>
                        
                    <div class="col-md-6 jumbotron">

                        <h2>Estatísticas de Doações:</h2>

                        <h3>Número de Doadores Atuais: <?php echo $numDoadores ?></h3>
                        <h3>Dinheiro Arrecadado Previsto: R$ <?php echo  number_format($valorDoadores, 2, ',', '') ?></h3>
                    </div>
                </div>

                <div class="row text-center">
                    <p>Para informações mais detalhadas, gere o relatório.</p>
                    <a href="relatorio.php"><button class="btn btn-success">Gerar Relatório</button></a>
                </div>

            </div>
        </section>
    </body>
</html>
