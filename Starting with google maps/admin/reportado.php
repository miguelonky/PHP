<?php 
include("../lib/motor.php");
$reportado = new reporte();
if ($_POST) {
 $reportado->detalle=$_POST['areadetalle'];
 $reportado->fecha=$_POST['fecha'];
 $reportado->ubicacion=$_POST['ubicacion'];
 $reportado->agregar();

}
$ext_perm = array("jpg", "png", "bmp", "gif");

  $p=$reportado->getid();


if(isset($_FILES["file"])){


  foreach ($_FILES["file"]["error"] as $key => $error) { 
    $nombre_archivo = $_FILES["file"]["name"][$key];   
    $tipo_archivo = $_FILES["file"]["type"][$key];   
    $tamano_archivo = $_FILES["file"]["size"][$key]; 
    $temp_archivo = $_FILES["file"]["tmp_name"][$key]; 
 
         $nom_img = $nombre_archivo;      
        $directorio = 'imagenes'; // Directorio
         if (move_uploaded_file($temp_archivo,"../lib/".$directorio . "/" . $nom_img))  
        {  
                   
              
          mysql_query("INSERT INTO `imagenes`(`id`, `imagen`) VALUES ('$p',' $nombre_archivo')") ;
        mysql_error();
       
          //echo "Las fotos se publicaron correctamente"; 
          
           }  
       
               }

               }



 ?>
 <html>
 <head>
 	<title>Reportado</title>
 </head>
 <body>
 <center><h1>Gracias por reportar su caso</h1></center>
 <center><h4>Su caso sera envaluado </h4></center>
 <center><a href="../">Salir</a></center>
 </body>
 </html>