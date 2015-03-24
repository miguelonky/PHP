<?php
	include ("lib/motor.php");
	include ("seguridad.php");
	if(isset($_GET['id']) && $_GET['id'] > 0){
		
		crimen::eliminarCrimen($_GET['id']);
		file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Elimine_un_crimen');
	}
	if(isset($_GET['idd']) && isset($_GET['es']) && $_GET['idd'] > 0){
	
		if($_GET['es'] == 'Autorizado'){
			crimen::setEstadoCrimen($_GET['idd'], 0);
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Denegue_un_crimen');
		}else if($_GET['es'] == 'No autorizado'){
			crimen::setEstadoCrimen($_GET['idd'], 1);
			file_get_contents('http://adamix.net/practica/?m=SP011001&t=9y10&e=20121084&op=Autorice_un_crimen');
		}
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
		
		<div>
		&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="administracionUsuarios.php">Administrar usuarios</a>
			<center>
			<h2>Cr&iacute;menes</h2>
				<table style="border: 5px outset #E0E0FF">
					<thead>
						<tr>
							<th></th>
							<th>Fecha</th>
							<th>Ubicaci&oacute;n</th>
							<th>Detalles</th>
							<th>Estado</th>
							<th>Foto(s)</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php mostrarCrimeness(); ?>
					</tbody>
				
				</table>
			</center>
		</div>
		
	</body>

</html>