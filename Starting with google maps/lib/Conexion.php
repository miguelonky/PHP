<?php

$oCon = new Conexion($cfg['servidor'],$cfg['usuario'],$cfg['clave'],$cfg['basedatos']);

class Conexion{ 
var $enlace;
 function  __construct($servidor, $usuario , $clave ,$basedatos){
 $this->enlace = mysql_connect($servidor, $usuario , $clave );
  mysql_select_db($basedatos,$this->enlace);
  
   
  }
  function __destruct(){
  
  
  mysql_close($this->enlace);
  
  
  }





}
?>