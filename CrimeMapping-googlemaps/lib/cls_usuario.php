<?php
class usuario{
	var $id;
	var $nombre;
	var $clave;
	var $autenticado;
	
	function __construct($usuario, $clave){
		
		$autenticado = false;
		$usuario = mysql_real_escape_string($usuario);
		$clave = mysql_real_escape_string($clave);
		
		$sql = "select * from usuarios where usuario='$usuario' and clave =md5('$clave');";
		$rs = mysql_query($sql);
		
		if ((mysql_num_rows($rs)) > 0){
			$fila = mysql_fetch_array($rs);
			
			$this->usuario = $usuario;
			$this->id = $fila['id'];
			$this->autenticado = true;
		}
	}

}



?>