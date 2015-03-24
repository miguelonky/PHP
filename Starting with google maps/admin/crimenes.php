<?php 
include("../lib/motor.php");

if (isset($_SESSION["userid"]) && $_SESSION["userid"]== true){

}

else{

header("Location:../login.php");

}

 ?>
 <html>
 <head>
 	<title>Casos</title>
 </head>
 <body>
 <div align="right"><a href="../logout.php" >salir</a></div>
 <center><h1>Administrador<h1></center>
 <hr/>
 <center><h2>Listado de casos</h2></center>
 <table width='650' border='1' >
 	<thead>
 		<tr>
 			<th>Descripcion</th>
 			<th>foto</th>
 			<th>fecha</th>
 			<th>Ubicacion</th>
 			<td></td>
 		</tr>
 		<thead>
 			<tbody>

             <?php //mostrarcasos(); ?>

 			</tbody>
 </body>
 </html>