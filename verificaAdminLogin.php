<?php
	//Inicia a sessão do usuário
	SESSION_START();

	include "conexao.php";

	//Informações de Login e Senha vindas do formulário de Login
	$usernameAdmin = $_POST["txtUsernameAdmin"];
	$passwordAdmin = $_POST["txtPasswordAdmin"];

	//String SQL para fazer a validação do Login do usuário
	$resulta = mysqli_query($con, "select * from admin where USER_ADMIN = '$usernameAdmin' and SENHA_ADMIN = '$passwordAdmin'");

	//Condições de Confirmação de Login e Doação
		if ($resulta->num_rows > 0){
			$registro = mysqli_fetch_array($resulta);
			$fechar = mysqli_close($con);
			$_SESSION['userAdmin'] = $usernameAdmin;
			$_SESSION['passAdmin'] = $passwordAdmin;
			$_SESSION['logado'] = 1;

			header('Location: adminpage.php');
			}
		else{
			$fechar = mysqli_close($con);
			echo "<script>alert('Login ou Senha Inválidos!');
			location = 'loginadmin.php' </script>";
			
		}
?>