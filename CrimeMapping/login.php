<?php
	include("lib/motor.php");
	$mensaje="";
	
	if($_POST){
		$usuario = $_POST["txtUsuario"];
		$clave = $_POST["txtClave"];
		$usuario = new usuario($usuario, $clave);
		
		if($usuario->autenticado){
			$_SESSION["userLogin"] = serialize($usuario);
			header("Location:administracion.php");
		}else{
			$mensaje = "Usuario o clave inv&aacute;lida";
		}
	}
?>

<html>
	<head>
		<title>Inicio de sesión</title>
	</head>
	
	<body>
		<link href="css/Index.css" rel="stylesheet"></link>
		<div id="sandbar">
			<header id="gc-googlebar">
				<a id="gc-logo" href="."><img src="img/CrimeMappingLogo3.png" ></img></a>
				
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
		
		<center>
			<br/><br/><br/><br/>
			<h3>Registrese<h3>
			<form method='post' action=''>
			<table>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="txtUsuario" required></td>
				</tr>
				
				<tr>
					<td>Clave:</td>
					<td><input type="password" name="txtClave" required></td>
				</tr>
				<tr>
					<td align='center' colspan='2'>
						<button>Iniciar</button>
					</td>
				</tr>				
			</table>
			<br/>
			<font color="red">
				<?php echo $mensaje ?>
			</font>
			</form>
		</center>
	</body>

</html>