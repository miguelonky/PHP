<?php

class usuarioAdm{
	var $usuarioId;
	var $usuario;
	var $clave;
	
	function __construct($usuarioId=0){
		if ($usuarioId > 0){
			$this->usuarioId = $usuarioId;
			$this->cargar();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10e=20121084&op=Cree_un_objeto_de_la_clase_usuario');
		}		
	}
	
	function guardar(){
		if($this->usuarioId > 0){
			//actualizar
			$sql = "UPDATE usuarios
					SET usuario = '$this->usuario',
						clave = md5($this->clave)
					WHERE id = '$this->usuarioId';";
					file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Modifique_un_usuario');
			mysql_query($sql);
			
		}else{
			//insertar
			$sql = "INSERT INTO usuarios
					(usuario, clave)
					VALUES ('$this->usuario', md5($this->clave));";
			mysql_query($sql);
			$this->crimenId = mysql_insert_id();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Agregue_un_usuario');
		
		}
	}
	
	function cargar(){
		$sql = "SELECT * FROM usuarios WHERE id = '$this->usuarioId';";
		$rs = mysql_query($sql);
		
		if((mysql_num_rows($rs)) > 0){
			
			$fila = mysql_fetch_array($rs);
			
			$this->usuario = $fila['usuario'];
		}
	}
	
	static function obtenerUsuarios($user){
		$sql = "SELECT * FROM usuarios WHERE usuario !='$user'";
		return mysql_query($sql);
	}
	
	static function obtenerUsuario($id){
		$sql = "SELECT * FROM usuarios WHERE id = '$id'";
		return mysql_query($sql);
	}
	
	static function eliminarUsuario($id){
		$sql = "delete FROM usuarios WHERE id = '$id'";
		return mysql_query($sql);
		file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Elimine_un_usuario');
	}
}
?>