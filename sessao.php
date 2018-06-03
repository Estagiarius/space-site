<?php
			//Validação de Sessão
			if (session_status() !== PHP_SESSION_ACTIVE) SESSION_START();

				//Verificar se já tem um Login ativo
				if((!isset ($_SESSION['userLogin']) == true) and (!isset ($_SESSION['userPass']) == true)){
					unset($_SESSION['userLogin']); 
					unset($_SESSION['userPass']); 
					$logado = 'Visitante';
				}
				else $logado = $_SESSION['userLogin'];
		?>

