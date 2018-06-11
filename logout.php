<?php

	SESSION_START();

	if((!isset ($_SESSION['userLogin']) == true) and (!isset ($_SESSION['userPass']) == true)) header('location: login.php');
		else{
			SESSION_DESTROY();
			header('location: index.php');
		}


?>