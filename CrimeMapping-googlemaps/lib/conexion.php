<?php
	$oCon = new conexion($cfg['servidor'],$cfg['usuario'],$cfg['clave'],$cfg['bd']);
	
	class conexion{
		
		var $enlace;
		function __construct($servidor, $usuario, $clave, $bd){
			
			$this->enlace = mysql_connect($servidor, $usuario, $clave);
			mysql_select_db($bd, $this->enlace);
			
		}
		
		function __destruct(){
			
			mysql_close($this->enlace);
		}	
	}
?>