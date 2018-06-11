<?php
	SESSION_START();
	header('Content-type: text/html; charset=ISO-8859-1');

	require_once 'Correios.php';

	$cpfDoacao = $_POST['txtCpfDoacao'];
	$nomeDoacao = $_POST['txtNomeDoacao'];
	$consulta = $_POST['txtCepDoacao'];
	$numCasa = $_POST['txtNumCasa'];
	
	if($cpfDoacao !=  "" && $nomeDoacao != "" && $consulta != "" && $numCasa != ""){

	$correios = new Correios;
	$correios -> retornaInformacoesCep($consulta);

	$logradouro = $correios -> informacoesCorreios -> getLogradouro();
	$bairro = $correios -> informacoesCorreios -> getBairro();
	$localidade = $correios -> informacoesCorreios -> getLocalidade();
	$uf = $correios -> informacoesCorreios -> getUf();
	//$cep = $correios -> informacoesCorreios -> getCep();


	$_SESSION['cpfDoacao'] = $cpfDoacao;
	$_SESSION['nomeDoacao'] = $nomeDoacao;
	$_SESSION['logradouroDoacao'] = $logradouro;
	$_SESSION['bairroDoacao'] = $bairro;
	$_SESSION['localidadeDoacao'] = $localidade;
	$_SESSION['ufDoacao'] = $uf;
	$_SESSION['cepDoacao'] = $consulta;
	$_SESSION['numCasaDoacao'] = $numCasa;

	header('Location:verificacaoBoleto.php');
	}
	else{
		echo '<script type="text/javascript">
	alert("Todos os campos não foram preenchidos!");
	location="doacao.php";
	</script>';
		//echo "<script> alert('Todos os campos não foram preenchidos!'); </script>";

		//header('Location: doacao.php');
	}


?>