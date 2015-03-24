<?php
	include ("lib/motor.php");
	include ("seguridad.php");
	
	$mensaje = "Crear usuario";
	$usuario = new usuarioAdm();
	if($_POST){
	
		$usuario->usuarioId = $_POST['txtId']; 
		$usuario->usuario = $_POST['txtUsuario']; 
		$usuario->clave = $_POST['txtClave'];
		
		$usuario->guardar();
		header("Location:administracionUsuarios.php");
	}else{
		
		if(isset($_GET['idEditar']) && $_GET['idEditar'] > 0){
			$mensaje = "Editar usuario";
			$usuario->usuarioId = $_GET['idEditar'];
			$usuario->cargar();
		
		}
	}
?>


<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Mantenimiento Usuario</title>
		<link href="css/Index.css" rel="stylesheet"></link>
		<script src="http://maps.google.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script> 		
		
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
		<h2><?php echo $mensaje;  ?></h2>
			<form action="" method="POST" enctype="multipart/form-data">
			<input type='hidden' value='<?php echo $usuario->usuarioId ?>' name='txtId'></input>
				<table style="border: 5px outset #E0E0FF">
					<tr>
						<td>Usuario</td>
						<td><input type='text' value='<?php echo $usuario->usuario ?>'  name='txtUsuario' required></input></td>
					</tr>
					
					<tr>
						<td>Nueva clave</td>
						<td><input  type='password' name='txtClave' required></input></td>
					</tr>
					
					
					<tr>
						<td  align='center'>
							<button type='submit'>Guardar</button>
						</td>
						<td  align='center'>
							<a href="administracionUsuarios.php"><button type='button'>Cancelar</button></a>
						</td>
					</tr>
				</table>
				
			</form>
		</center>
	</body>
</html>