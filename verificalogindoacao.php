<?php
	
	SESSION_START();
	//Recuperar a doação em outra variavel depois
	$qtdDoacao = (double) $_POST['txtValorDoacao'];
	$_SESSION['qtdDoacao'] = $qtdDoacao;


	if((!isset ($_SESSION['userLogin']) == true) and (!isset ($_SESSION['userPass']) == true)){
		$_SESSION['doacao'] = 1;
			header('location: login.php');
		} 
			else header('location: doacao.php');
		


	?>