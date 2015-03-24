<?php 
include_once("motor.php");
function mostrar(){
    $cont = 0 ;
    $contenido = maps::obtenerbarnarios();
    while($conte = mysql_fetch_array($contenido)){
      
      /*$i = " ";
      $fotos = foto::obtenerFotos($conte['conteId']);
      while($foto = mysql_fetch_array($fotos)){
        
        $imagen = $foto['nombre'];      
        $i = $i." ha";
      }*/
      
     
      $detall = addslashes($conte['lugar']);
        $imagen="";
       if($conte['tipo']==0){

        $imagen="imagenes/beach.png";

       }
       if($conte['tipo']==1){

        $imagen="imagenes/shore.png";

       }

      
      echo "
        var contentString$cont = '<div><h4>{$conte['baneario']}</h4> <p>{$detall}</p>';
        
        var infoWindow$cont = new google.maps.InfoWindow({
          content: contentString$cont
        });
        
        var marker$cont = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng{$conte['localizacion']},
          icon:'$imagen'         
        });
        
        google.maps.event.addListener(marker$cont, 'click', function() {
          infoWindow$cont.open(map,marker$cont);
        });
      ";


      $cont++;
    }
    $cont1 = 0 ;
    $reportes = reporte::obtenertrajedias();
    while($conte = mysql_fetch_array($reportes)){
      
      /*$i = " ";
      $fotos = foto::obtenerFotos($conte['conteId']);
      while($foto = mysql_fetch_array($fotos)){
        
        $imagen = $foto['nombre'];      
        $i = $i." ha";
      }*/
      
     
      $detall = addslashes($conte['direcion']);
             
      echo "
        var contentString$cont1 = '<div><h4>{$conte['nombre']}</h4><h5>{$conte['descripcion']}</h5> <p>{$detall}</p>';
        
        var infoWindow$cont1 = new google.maps.InfoWindow({
          content: contentString$cont1
        });
        
        var marker$cont1 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng{$conte['ubicacion']},
          icon:'imagenes/firstaid.png'         
        });
        
        google.maps.event.addListener(marker$cont1, 'click', function() {
          infoWindow$cont1.open(map,marker$cont1);
        });
      ";


      $cont1++;
    }


  }




 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>


    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title> Mapa</title>
    <script src="http://maps.google.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script> 
    
  
  <script type="text/javascript">
    function initialize(){
    
        var posicion = new google.maps.LatLng(18.549381,-69.813995);
        var settings = {
          zoom: 8,
          center: posicion
        };
        
        var map = new google.maps.Map(document.getElementById("map"), settings);
        <?php   mostrar(); ?>
        
        
    }
  </script>
  
  
  </head>
  
  <body bgcolor="#E2ECEE" onload="initialize()">
    
   
   <center> <h1>Mapa de barnearios y reportes</h1></center>
      
      <div id="gc-main" class="main">
        <div id="gc-content">
          <div>
            <div itemprop="articleBody">
              
            </div>            
          </div>
        </div>
      </div>
    </div>
    
    <center>
      <div id="map" style="width: 800px; height: 500px"></div>
    </center>
    <div>
      &nbsp;
    </div>
    <div align="center">
      <a href="reporte.php" target="_self"> <input type="button" name="btn_reporte" value="Reportar tragedia "> </a>
   
  </div>
  </body>

</html>