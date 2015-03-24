<?php
	include ("lib/motor.php");
	include ("seguridad.php");
	if(isset($_GET['idEliminar'])){
		
		usuarioAdm::eliminarUsuario($_GET['idEliminar']);
	}
	
?>

<html>
	<head>
		<title>Administracion</title>
	</head>
	<body>
		<link href="css/Index.css" rel="stylesheet"></link>
		<div id="sandbar">
			<header id="gc-googlebar">
				<a id="gc-logo" href="Index.php"><img src="img/CrimeMappingLogo3.png" ></img></a>
				<div align="right">
					<a href="logout.php">Cerrar sesi&oacute;n</a>
				</div>
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
							<a href="ReportarCrimen.php">Reportar crimen</a>
						</li>
						<li class>
							<a href="administracion.php">Administraci&oacute;n</a>
						</li>
											
					</ul>
				</div>
			</div>
		</div>
		
		<div>&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="administracion.php">Administrar cr&iacute;menes</a>
			
			<center>
			<h2>Usuarios</h2>
			<a href='mantenimientoUsuario.php'>Crear un usuario</a><br/><br/>
			
				<table style="border: 5px outset #E0E0FF">
					<thead>
						<tr>
							<th></th>
							<th>Usuario</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php mostrarUsuarios(); ?>
					</tbody>
				
				</table>
			</center>
		</div>
		
	</body>

</html>