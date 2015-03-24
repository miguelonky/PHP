<?php
session_start();
include ("config.php");
include ("Conexion.php");
include ("cls_articulo.php");
include ("cls_baneario.php");
include ("cls_mapa.php");
include ("cls_tragedia.php");
include ("cls_reportes.php");
 
function mostrabalneario(){

 $balnea = balnareos::obtenerbarnarios();
 while($tipos = mysql_fetch_array($balnea))
 { echo "
 <tr>
 <td>{$tipos['baneario']}</td>
 <td>{$tipos['lugar']}</td>
  </tr>
   ";
 
 }
}

function ver()
{
$consulta = mysql_query("SELECT * FROM foro1 WHERE identificador = 0 ORDER BY fecha DESC",$connect);
$lado=mysql_num_rows($consulta);
echo"<hr size=10 color=ffffff width =100% align= left />";
while($row=mysql_fetch_array($consulta)){
$titulo=$row['titulo'];
$id=$row['id'];
$fecha=$row['fecha'];
$respuestas=$row['respuestas'];
echo("<table width='100%' cellspacing='0' cellpading='0'>\n");
echo ("<tr>\n");
echo("<td  width='5%'><a class='a' href='foro.php?id=$id'>Ver</a></td>\n");
echo("<td width='30%'>$titulo</td>\n");
echo("<td width='30%'>".date("d-m-y",$fecha)."</td>\n");
echo("<td width='30%'>$respuestas</td>\n");
echo("</tr>\n");
echo("</table>\n");
echo"<hr>";
} 
}



 
?>