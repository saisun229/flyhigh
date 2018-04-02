<?php
	
	//Resume session
	session_start();
	unset($_SESSION);
	session_destroy();
	header("Location: main.php");
	
?>