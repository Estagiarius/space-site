if (SESSION_STATUS() !== PHP_SESSION_ACTIVE) SESSION_START();
		
		$logado = 'Visitante';

		//Validação de Login
		if((!isset ($_SESSION['userLogin']) == true) and (!isset ($_SESSION['userPass'])) == true){

		SESSION_DESTROY();
			
		 UNSET($_SESSION['login']);
    	 UNSET($_SESSION['senha']);

    	$logado = 'Visitante';	 	 

	}

	else $logado = $_SESSION['userLogin'];
