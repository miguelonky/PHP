<?php

class balnareos{
var $id;	
var $lugar;
var $baneario;
var $tipo;

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

     $sql="UPDATE `barneario` SET `baneario`=$this->baneario ,`tipo`=$this->tipo WHERE `id`=$this->id ";
 	
	 mysql_query($sql);
	
  }
 else{
 
 //agregar
 $sql="INSERT INTO `barneario`(  `baneario`, `tipo`) VALUES ($this->baneario,$this->tipo)";
 mysql_query($sql);
  $this->id = mysql_insert_id();
  }
 
 }
function Cargar (){
$sql ="SELECT  `lugar`, `baneario`, `tipo` FROM `barneario` WHERE id = $this->id ";
$rs =mysql_query($sql);
if(mysql_num_rows($rs)>0){
$row = mysql_fetch_array($rs);
$this->baneario= $row['baneario'];

}

 }
 static function obtenerbarnarios(){
 $sql = "SELECT `lugar`, `baneario` FROM `barneario` ";
 return mysql_query($sql);
 
 }

 

}


?>