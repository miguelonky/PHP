<?php
	include("lib/motor.php");
	
	$crimen = new crimen();
	$foto = new foto();
	
	if($_POST){
	
		$crimen->crimenId = $_POST['txtCrimenId'];
		$crimen->detalles = $_POST['txtDetalles'];
		$crimen->fecha = $_POST['txtFecha'];
		$crimen->ubicacion = $_POST['txtUbicacion'];
		$crimen->aprobado = (isset ($_POST['txtAprobado']))?$_POST['txtAprobado']:""; 
		$crimen->ubicacionTxt = $_POST['Ubicacionn']; 
		
		$crimen->guardar();
		
		if($_FILES){
		
			$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
			$limite_kb = 16384;			
			
			for($x=0; $x < count($_FILES['imagen']['name']); $x++){
			
				if(!isset($_FILES['imagen']) || $_FILES['imagen']['error'][$x] > 0){
					echo "Ha ocurrido un error al cargar la imagen!";
					
				}else{
					
					if(in_array($_FILES['imagen']['type'][$x], $permitidos) && $_FILES['imagen']['size'][$x] <= ($limite_kb * 1024)){
					
						
						
						$tipo = $_FILES['imagen']['type'][$x];
						$fileSize = $_FILES['imagen']['size'][$x];
						
						
						
						$nombreArchivo = $_FILES['imagen']['name'][$x];
						$imagenTemporal = $_FILES['imagen']['tmp_name'][$x];
						$imagenn = file_get_contents("{$imagenTemporal}");
						file_put_contents("img/{$nombreArchivo}", $imagenn);
						
							
					$crimenIds = crimen::obtenerIdCrimenes($_POST['txtDetalles'],$_POST['txtFecha'],$_POST['txtUbicacion']);
					$id = mysql_fetch_array($crimenIds);
					
					$foto->crimenId = $id['crimenId'];
					$foto->nombre = $nombreArchivo;
					
					$foto->guardar();
					
					}
				}
			}
		}
		header("Location:Index.php");
		
	}else{
		
		if(isset($_GET['id']) && $_GET['id'] > 0){
			
			$crimen->crimenId = $_GET['id'];
			$cliente->cargar();
		
		}
	}

?>


<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Reportar Crimen</title>
		<link href="css/Index.css" rel="stylesheet"></link>
		<script src="http://maps.google.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script> 
		
		<script type="text/javascript">
			var geocoder;
			
			function codeAddress(){
				geocoder = new google.maps.Geocoder();
				var address = document.getElementById('Ubicacionn').value;
				geocoder.geocode( { 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
					  
						document.getElementById('txtUbicacion').value = results[0].geometry.location;
						
					} else {
					  alert('Direccion invalida: ' + status);
					  document.getElementById('Ubicacionn').value = "";
					}
				});
			}
		
		</script>
		
		
	</head>
	<body>
		<div id="sandbar">
			<header id="gc-googlebar">
				<a id="gc-logo" href="Index.php"><img src="img/CrimeMappingLogo3.png" ></img></a>
			</header>
		</div>
		<div id="gc-wrapper" itemscope="" itemtype="http://schema.org/Article">
			<div id="gc-topnav">
				<div>
					<ul>
						<li class>
							<a href="Index.php">Inicio</a>
						</li>
						<li class>
							<a href="">Reportar crimen</a>
						</li>
						<li class>
							<a href="administracion.php">Administraci&oacute;n</a>
						</li>
					
					</ul>
				</div>
			</div>
		</div>
		&nbsp;
		<center>
			<form action="ReportarCrimen.php" method="POST" enctype="multipart/form-data">
				<input type='hidden' value='<?php echo $crimen->crimenId ?>' name='txtCrimenId'></input>
				<input type='hidden' value='<?php echo $foto->fotoId ?>' name='txtFotoId'></input>
				<input type='hidden'  name='txtUbicacion' id='txtUbicacion'></input>
				<table style="border: 5px outset #E0E0FF">
					<tr>
						<td>Detalles</td>
						<td><textarea value='<?php echo $crimen->detalles ?>'  name='txtDetalles' required></textarea></td>
					</tr>
					
					<tr>
						<td>Fecha</td>
						<td><input value='<?php echo $crimen->fecha ?>' type='date' name='txtFecha' required></input></td>
					</tr>
					
					<tr>
						<td>Direcci&oacute;n</td>
						<td><input  type='text' name='Ubicacionn' id='Ubicacionn' onchange="codeAddress()" required></input></td>
					</tr>
					
					
					
					<tr>
						<td>Fotos</td>
						<td><input  type='file' name='imagen[]' id='imagenes' multiple='1' accept="image/jpeg,image/gif,image/png,image/jpg"></input></td>
					</tr>
					
					
					
					
					<tr>
						<td></td>
						<td>
							<label><input type='hidden' value='1' name='txtActivo' <?php echo ($crimen->aprobado>0)?'checked': '0'; ?>></input></label>
						</td>
					</tr>
					
					<tr>
						<td  align='center'>
							<button type='submit'>Guardar</button>
						</td>
						<td  align='center'>
							<a href="Index.php"><button type='button'>Cancelar</button></a>
						</td>
					</tr>
				</table>
				
			</form>
		</center>
	</body>
</html>