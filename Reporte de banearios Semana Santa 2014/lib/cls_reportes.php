<?php

class reporte{
var $id;	
var $nombre;
var $email;
var $telefono;
var $descripcion;
var $direcion;
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
 $sql ="UPDATE `trajedia` SET `nombre`='$this->nombre',`email`='$this->email',`telefono`='$this->telefono',`descripcion`='$this->descripcion',`direcion`='$this->direcion',`ubicacion`='$this->ubicacion' WHERE id= $this->id ";
	 mysql_query($sql);
	
  }
 else{
 
 //agregar
 $sql="INSERT INTO `trajedia`( `nombre`, `email`, `telefono`, `descripcion`, `direcion`, `ubicacion`) VALUES ('$this->nombre','$this->email','$this->telefono','$this->descripcion','$this->direcion','($this->ubicacion)')";
 mysql_query($sql);
  $this->id = mysql_insert_id();
  }
 
 }
function Cargar (){
$sql ="SELECT * FROM `trajedia`  WHERE id = '$this->id'";
$rs =mysql_query($sql);
if(mysql_num_rows($rs)>0){
$row = mysql_fetch_array($rs);
$this->nombre= $row['nombre'];
$this->email= $row['email'];
$this->telefono= $row['telefono'];
$this->descripcion= $row['descripcion'];
$this->direcion= $row['direcion'];
$this->ubicacion= $row['ubicacion'];




}

 }
 static function obtenertrajedias(){
 $sql = "SELECT * FROM `trajedia`  ";
 return mysql_query($sql);
 
 }

 

}




?>