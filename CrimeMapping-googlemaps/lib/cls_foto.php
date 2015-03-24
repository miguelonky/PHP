<?php

class foto{
	var $fotoId;
	var $crimenId;
	var $nombre;
	
	function __construct($fotoId=0){
		if ($fotoId > 0){
			$this->fotoId = $fotoId;
			$this->cargar();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Cree_un_objeto_de_la_clase_foto');
		}		
	}
	
	function guardar(){
		if($this->fotoId > 0){
			//insertar
			$sql = "INSERT INTO fotos
					(crimenId, nombre)
					VALUES ($this->crimenId,'$this->nombre');";
			mysql_query($sql);
			$this->fotoId = mysql_insert_id();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Agregue_una_foto');
			
		}else{
			//insertar
			$sql = "INSERT INTO fotos
					(crimenId, nombre)
					VALUES ($this->crimenId,'$this->nombre');";
			mysql_query($sql);
			$this->fotoId = mysql_insert_id();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Agregue_una_foto');
		}
	}
	
	function cargar(){
		$sql = "SELECT * FROM fotos WHERE fotoId = '$this->fotoId';";
		$rs = mysql_query($sql);
		
		if((mysql_num_rows($rs)) > 0){
			
			$fila = mysql_fetch_array($rs);
			
			$this->crimenId = $fila['crimenId'];
			$this->nombre = $fila['nombre'];
			
		}
	}
	
	static function obtenerFotos($id){
		$sql = "SELECT * FROM fotos WHERE crimenId = $id";
		return mysql_query($sql);
	}
	
	/*static function s($id){
		$sql = "SELECT * FROM fotos WHERE crimenId = $id";
		$sqll = mysql_query($sql);
		
		while($fotooo = mysql_fetch_array($sqll)){
			$imagen = "<img width=100px height=100px src='img/{$fotooo['nombre']}'></img> ";	
			return $imagen;
		}
	}*/
	
	static function obtenerF(){
		$sql = "SELECT * FROM fotos";
		return mysql_query($sql);
	}
	
	static function obtenerFoto($idd){
		$sql = "SELECT * FROM fotos WHERE fotoId = '$idd'";
		return mysql_query($sql);
	}
	
	static function eliminarFoto($id){
		$sql = "delete FROM fotos WHERE fotoId = '$id'";
		return mysql_query($sql);
		file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Elimine_una(s)_foto(s)');
	}
}
?>