<?php

class crimen{
	var $crimenId;
	var $detalles;
	var $fecha;
	var $ubicacion;
	var $aprobado;
	var $ubicacionTxt;	
	
	function __construct($crimenId=0){
		if ($crimenId > 0){
			$this->crimenId = $crimenId;
			$this->cargar();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=7&e=20121084&op=Cree_un_objeto_de_la_clase_crimen');
		}		
	}
	
	function guardar(){
		if($this->crimenId > 0){
			//actualizar
			$sql = "UPDATE crimenes
					SET detalles = '$this->detalles',
						fecha = '$this->fecha',
						ubicacion = '$this->ubicacion',
						aprobado = '$this->aprobado',
						ubicacionTxt = '$this->ubicacionTxt'
					WHERE crimenId = '$this->crimenId';";
					file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Modifique_un_crimen');
			mysql_query($sql);
			
		}else{
			//insertar
			$sql = "INSERT INTO crimenes
					(detalles, fecha, ubicacion, aprobado, ubicacionTxt)
					VALUES ('$this->detalles', '$this->fecha', '$this->ubicacion', '$this->aprobado', '$this->ubicacionTxt');";
			mysql_query($sql);
			$this->crimenId = mysql_insert_id();
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Agregue_un_crimen');
		
		}
	}
	
	function cargar(){
		$sql = "SELECT * FROM crimenes WHERE crimenId = '$this->crimenId';";
		$rs = mysql_query($sql);
		
		if((mysql_num_rows($rs)) > 0){
			
			$fila = mysql_fetch_array($rs);
			
			$this->detalles = $fila['detalles'];
			$this->fecha = $fila['fecha'];
			$this->ubicacion = $fila['ubicacion'];
			$this->aprobado = $fila['aprobado'];
			$this->ubicacionTxt = $fila['ubicacionTxt'];
		}
	}
	
	static function obtenerCrimenes(){
		$sql = "SELECT * FROM crimenes";
		return mysql_query($sql);
	}
	static function obtenerCrimenesAprobados(){
		$sql = "SELECT * FROM crimenes WHERE aprobado = 1 AND fecha >= CURDATE() - INTERVAL 14 DAY ";
		return mysql_query($sql);
	}
	static function obtenerIdCrimenes($det,$fecha,$ubic){
		$sql = "SELECT crimenId FROM crimenes WHERE detalles='$det' and fecha='$fecha' and ubicacion='$ubic'";
		return mysql_query($sql);
	}
	static function eliminarCrimen($id){
		$sql = "delete FROM crimenes WHERE crimenId = '$id'";
		return mysql_query($sql);
		file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Elimine_un_crimen');
	}
	static function setEstadoCrimen($id,$estado){
		$sql = "UPDATE crimenes SET aprobado = $estado  WHERE crimenId = '$id'";
		return mysql_query($sql);
		file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Elimine_un_crimen');
	}
}
?>