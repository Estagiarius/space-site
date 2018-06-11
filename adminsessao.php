<?php
			//Validação de Sessão
			if (session_status() !== PHP_SESSION_ACTIVE) SESSION_START();

				//Verificar se já tem um Login ativo
				if((!isset ($_SESSION['userAdmin']) == true) and (!isset ($_SESSION['passAdmin']) == true)){
					unset($_SESSION['userAdmin']); 
					unset($_SESSION['passAdmin']); 
					$_SESSION['logado'] = 0;
					$logado = 'Intruso';
					echo "<script> alert('Você não está autorizado a acessar essa área!'); location = 'index.php' </script>";
					
				}
				else{
					$logado = $_SESSION['userAdmin'];
					$stringLogin = 'Logout';
				$linkSessao = 'logout.php';	
				} 

		?>

