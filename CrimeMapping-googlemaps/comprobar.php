<?php
	include("lib/motor.php");
	
	if(isset($_SESSION["userLogin"]) && $_SESSION["userLogin"]->autenticado == true){
		
		header("Location:administracion.php");
	}else{
		
		header("Location:login.php");
	}
	
?>