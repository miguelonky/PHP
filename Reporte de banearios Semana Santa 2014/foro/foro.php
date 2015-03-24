<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$id=$_GET['id'];
$host="localhost";
$user="root";
$db="usuarios1";
$enlace=mysql_connect($host,$user);
mysql_select_db($db,$enlace);
$consulta=mysql_query('SELECT * FROM foro1 WHERE id="'.$id.'" ORDER BY fecha DESC',$enlace);
while ($row=mysql_fetch_array($consulta)){
$titulo=$row['titulo'];
$autor=$row['autor'];
$mensaje=$row['mensaje'];
$id=$row['id'];
$fecha=$row['fecha'];
$respuestas=$row['respuestas'];
echo"<h2> <tr>
    <td> $titulo</td>
  </tr></h2><table>
  <tr>
    <td>Autor: $autor</td>
  </tr>
  <tr>
    <td>$mensaje</td>
  </tr>
</table>
";
echo"<br /><br /><a href=formulario.php?id=$id&respuestas=$respuestas>Responder</a><br />
<br />";
}

$consulta2=mysql_query("SELECT * FROM foro1 WHERE identificador ='$id' ORDER by fecha DESC",$enlace);
echo"RESPUESTAS:<br />
<br />
";
while($row=mysql_fetch_array($consulta2)){
$titulo=$row['titulo'];
$autor=$row['autor'];
$mensaje=$row['mensaje'];
$id=$row['id'];
$fecha=$row['fecha'];
$respuestas=$row['respuestas'];
echo"
<div width='40%' style='background-color:#CCCCCC;'>
<table>
    <tr><strong>Titulo: </strong>$titulo</tr><br />
    <tr><strong>Autor: </strong>$autor</tr><br />
    <tr>$mensaje</tr><br />
<br />
</table>
</div><br />
";
}
?>
</div>

