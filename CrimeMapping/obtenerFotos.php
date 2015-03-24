<?php
include("lib/motor.php");
class obt{

	static function aa($id){
		
		$i = "";
		$fotos = foto::obtenerFotos($id);
		$cont = 1;
		while($foto = mysql_fetch_array($fotos)){
			
			$imagen = $foto['nombre'];			
			$i = $i. " <img width=100px height=100px src='img/{$imagen}' />";
		}
		echo $i;
	}
}
?>

<html>
	<head>
	
	</head>
	
	<body>
		<div>
			<?php  obt::aa(33); ?>
		</div>
	</body>

</html>