<?php
	include('mpdf/mpdf.php');
	include 'conexao.php';

	 $queryNumCadastros = mysqli_query($con, "SELECT COUNT(1) AS numCadastros FROM jogador");

            $row = mysqli_fetch_assoc($queryNumCadastros); 
            $numCadastros = $row['numCadastros'];


            $queryNumDoadores = mysqli_query($con, "SELECT COUNT(DISTINCT ID_JOGADOR_DOADOR) AS numDoadores FROM doador");


            $row = mysqli_fetch_assoc($queryNumDoadores);
            $numDoadores = $row['numDoadores'];

            $queryValorDoacao = mysqli_query($con, "SELECT SUM(VALOR_DOACAO) AS valorDoacao FROM doador");

            $row = mysqli_fetch_assoc($queryValorDoacao);
            $valorDoadores = $row['valorDoacao'];

            $queryQuantidadeDoacoes = mysqli_query($con, "SELECT COUNT(1) AS quantidadeDoacoes FROM doador");

            $row = mysqli_fetch_assoc($queryQuantidadeDoacoes);
            $quantidadeDoacoes = $row['quantidadeDoacoes'];

            echo mysqli_error($con);

            mysqli_close($con);

            date_default_timezone_set('America/Sao_Paulo');

            $mpdf = new mPDF();

            ob_start();

            echo "<!DOCTYPE html>
            <html>
            <head>
            	<title>Relatório de Testes</title>
            </head>
            <body>
            	<div>
            		<img src='images/logo.png' />
            		<h1>Relatório de Jogadores</h1>

	           		<h2>Estatísticas de Cadastro dos Usuários:</h2>
            		<h3>Número Total de Cadastros: ". $numCadastros . "</h3>
            		<br/>
            		<h2>Estátisticas de Doação: </h2>
            		<h3>Número de Doadores Atuais: ". $numDoadores . "</h3>
            		<h3>Quantidade de Doações: " . $quantidadeDoacoes . "</h3>
            		<h3>Valor Total Arrecadado: R$". number_format($valorDoadores, 2, ',', '') . "</h3>

          			<br/>
          			<br/>
            		<p>Este relatório foi gerado no dia ". date('d/m/Y', time()). ", as ". date('H:i:s', time()). ".

            		</p>
            </body>
            </html>";

            $html = ob_get_contents();

            ob_end_clean();

            $mpdf ->WriteHTML($html);
            $mpdf ->Output();
	
	?>