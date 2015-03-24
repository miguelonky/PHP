<?php
session_start();
include ("config.php");
include ("Conexion.php");
include ("cls_usuario.php");
include ("cls_reportes.php");
 


 function mostrarcasos(){

   $casos= reporte::obtenercasos();
   while ($caso = mysql_fetch_array($casos)) {

     echo "<tr>
           <td>{$caso['detalle']}</td>
           <td>{$caso['foto']}</td>
           <td>{$caso['fecha']}</td>
           <td>{$caso['ubicacion']}</td>
           <td>{$caso['autorizacion']}</td>
           
             </tr>



     ";


   }




 }




 
?>