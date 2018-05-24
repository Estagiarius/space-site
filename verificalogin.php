<?php

	include "conexao.php";

	SESSION_START();

	$userLogin = $_POST["txtUsernameLog"];
	$userPass = $_POST["txtPasswordLog"];

	$resulta = mysqli_query($con, "select * from jogador where USERNAME_JOGADOR = '$userLogin' and SENHA_JOGADOR = '$userPass'");


	if ($resulta->num_rows > 0){

		$registro = mysqli_fetch_array($resulta);

		$fechar = mysqli_close($con);

		$_SESSION['userLogin'] = $userLogin;

		$_SESSION['logado'] = 1;

		header('Location: redirecionamento.html');
	}
	else{
		$fechar = mysqli_close($con);

		echo "<script>alert('Login ou Senha Inválidos!') </script>";
	}
?>