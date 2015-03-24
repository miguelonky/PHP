<?php

class Articulo{
var $id;	
var $articulo;
var $autor;
var $fecha;

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

     $sql="UPDATE `articulos` SET `articulo`=$this->articulo,`autor`=$this->autor WHERE id ='$this->id' ";
 	
	 mysql_query($sql);
	
  }
 else{
 
 //agregar
 $sql="INSERT INTO `articulos`( `articulo`,`autor`) VALUES ($this->articulo,$this->autor)";
 mysql_query($sql);
  $this->id = mysql_insert_id();
  }
 
 }
function Cargar (){
$sql ="SELECT `articulo` , `autor`, `fecha`  FROM `articulos` WHERE id = '$this->id'";
$rs =mysql_query($sql);
if(mysql_num_rows($rs)>0){
$row = mysql_fetch_array($rs);
$this->articulo= $row['articulo'];
$this->autor= $row['autor'];
$this->fecha= $row['fecha'];
}

 }
 static function obtenerarticulos(){
 $sql = "SELECT `articulo` , `autor`, `fecha` FROM  `articulos` ";
 return mysql_query($sql);
 
 }

 

}




?>