<?php 

include("lib/motor.php");
$mensaje="";
if($_POST){

$usuario =$_POST["txtusuario"];
$clave =$_POST["txtclave"];
$usuario = new usuario ($usuario,$clave);
 if ($usuario->autenticado) {
	
	header("Location:admin/crimenes.php");
}
else {

	$mensaje="Usuario o clave invalida";
}
 

$_SESSION['userid'] = $usuario->autenticado; 
}

 ?>

 <html>
 <head>
 	<title>Inicio de sesion</title>
 </head>
 <body>
<center>
	<br/>
	<br/>
	<br/>
	<br/>
	<form method="Post" action =''>
	<table>
		<tr>
		<td>Usuario:</td>
		<td><input type="text" name ="txtusuario"/></td>
		</tr>
		<tr>
		<td>Clave:</td>
		<td><input type="password" name ="txtclave"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
			<button>Iniciar</button>
		</tr>		

</table>
<br>
<font color="red">
<?php echo $mensaje; ?>
</font>
 </form>
 </body>
 </html>