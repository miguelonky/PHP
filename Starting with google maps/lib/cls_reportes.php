<?php

class reporte{
var $id;	
var $detalle;
var $foto;
var $fecha;
var $ubicacion;


 function __construct($id=0){
 if($id>0)
 { 
 $this->id= $id;
 $this->cargar();
 
 }
 }
function getid(){

 $lol =$this->id;

 return $lol;

 }
  
 
 function agregar(){
 if($this->id >0){
 
 //actualizar
 $sql ="UPDATE crimenes  SET 
      `detalle`='$this->detalle',
      `foto`='$this->foto',
      `fecha`='$this->fecha',
      `ubicacion`='$this->ubicacion'
	 	 WHERE id ='$this->id' ";
	 mysql_query($sql);
	
  }
 else{
 
 //agregar
 $sql="INSERT INTO `crimenes`( `detalle`, `foto`, `fecha`, `ubicacion`) VALUES ('$this->detalle','$this->foto','$this->fecha','$this->ubicacion')";
 mysql_query($sql);
  $this->id = mysql_insert_id();
  }
 
 }
function Cargar (){
$sql ="SELECT * FROM `crimenes` WHERE id = '$this->id'";
$rs =mysql_query($sql);
if(mysql_num_rows($rs)>0){
$row = mysql_fetch_array($rs);
$this->detalle= $row['detalle'];
$this->foto= $row['foto'];
$this->fecha= $row['fecha'];
$this->ubicacion= $row['ubicacion'];


}

 }
 static function obtenercasos(){
 $sql = "SELECT * FROM  `crimenes` ";
 return mysql_query($sql);
 
 }

 

}




?>