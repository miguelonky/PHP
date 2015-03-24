<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="usuarios1";
$autor=$_POST['autor'];
$titulo=$_POST['titulo'];
$mensaje=$_POST['mensaje'];
$respuesta=$_POST['respuestas'];
$identificador=$_POST['identificador'];
$enlace=mysql_connect($host,$user);
mysql_select_db($db,$enlace);
$fecha=time();
if(empty($identificador))
{$identificador=0;}
$respuesta=$respuestas+1;
$sql ="INSERT into foro1 (autor, titulo, mensaje, fecha, identificador) VALUES ('$autor','$titulo','$mensaje','$fecha','$identificador')";
mysql_query($sql);
$sql2="UPDATE foro1 SET respuestas='$respuesta' WHERE id='$identificador'";
mysql_query($sql2);
$resultado=mysql_query("SELECT '$mensaje' FROM foro1 WHERE mensaje='$mensaje'",$enlace);
while ($registro=mysql_fetch_array($resultado))
{
echo"<tr>";
foreach($registro as $clave)
{
echo"<td>",$clave,"</td>";
}
}
echo "<br />
<br />";
echo '<a href="index.php">volver al foro</a>';
?>
</div>
