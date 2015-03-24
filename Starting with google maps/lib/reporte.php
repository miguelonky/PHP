<html>
<head>
<title>Reporte</title>
<link rel='stylesheet' href='estilos.css'></link>
</head>
<body>
<center><div><label><h1>Reporte su caso <h1></label></div></center>
 <form class='contacto' method='POST' action='../admin/reportado.php'enctype="multipart/form-data">
<div><label>Detalle:</label><textarea rows='6' name="areadetalle"required></textarea></div>	
<div><label>Fotos:</label><input type="file"  name ="file[]" multiple="1" accept="image/*" id "fotos" required ></div>
<div><label>Fecha:</label><input type='date' name="fecha" required value=''></div>
<div><label>Ubicacion:</label><input type='text'name="ubicacion" required value=''></div>
<div><input type='submit' value='Enviar reporte'></div>
 </form>
</body>
</html>