<?php
	include_once("lib/motor.php");
	
	if(isset($_SESSION["userLogin"]) && unserialize($_SESSION["userLogin"])->autenticado == true){
		
		
	}else{
		
		header("Location:login.php");
	}
	

?>