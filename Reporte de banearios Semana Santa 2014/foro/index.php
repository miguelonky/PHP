
<h2>Bienvenido</h2>
<?php echo'<strong><table width="100%" class="texto">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="30%">Titulo</td>
    <td width="30%">Fecha</td>
    <td width="30%">Respuestas</td>
  </tr>
</table></strong>
';
?>
<?php 
$host="localhost";
$user="root";
$connect=mysql_connect($host,$user);
mysql_select_db('usuarios1',$connect); 
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
?>
<br />
<a href="formulario.php?respuestas=0" class="a">Iniciar tema</a>


</div>
