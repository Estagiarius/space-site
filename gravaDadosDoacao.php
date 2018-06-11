<?php

	SESSION_START();

	include 'conexao.php';
	include 'sessao.php';

	$cpf = $_SESSION['cpfDoacao'];
	$nome = $_SESSION['nomeDoacao'];
	$valor = $_SESSION['qtdDoacao'];
	$data = $dataGeracao = date('Y-m-d', time());
	$cep = $_SESSION['cepDoacao'];
	$numcasa = $_SESSION['numCasaDoacao'];
	$user = $_SESSION['userLogin'];


	$resultaJogador = mysqli_query($con, "SELECT ID_JOGADOR AS identificajogador FROM jogador WHERE USERNAME_JOGADOR = '$user'");

	/*if($resultaJogador!=0) echo"<script> alert('Primeiro Passou');</script>";
        else echo "<script> alert('Primeiro Babou');</script>";*/


        if($row = $resultaJogador -> fetch_assoc()) {
        	$idJogador = $row['identificajogador'];
        }
      
        $cpfDoacao = (int) $cpf;
        $valorDoacao = (double) $valor;
        echo "<script> alert('$idJogador');</script>";
         echo "O tipo da variável é:" .gettype($data) . "! E seu valor é $data <br/>";
         echo "O tipo da variável é: " .gettype($cpf) . "! E seu valor é $cpf, além do tamanho ser de " . strlen($cpf) . " <br/>";



		
	$resulta = mysqli_query($con, "INSERT INTO doador(CPF_DOADOR, NOME_DOADOR, VALOR_DOACAO, DT_ENTRADA, ID_JOGADOR_DOADOR, CEP_DOADOR, NUM_CASA_DOADOR) values ($cpf, '$nome', $valor, '$data', $idJogador, '$cep', '$numcasa')");

	if($resulta!=0) {
		header('Location: boleto.php');
		mysqli_close($con);
	}
        else{
         echo "<script> alert('Erro de Inserção: ". mysqli_error($con) ." ');</script>";
         mysqli_close($con);
	     }

	     

?>