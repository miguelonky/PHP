

<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEhRAlviIF1L05dZamK10CP-G6A6hmxRc&sensor=false">
</script>
                       <script>
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}



function updateMarkerPosition(latLng) {
  document.getElementById('info').value = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}

function updateMarkerAddress(str) {
  document.getElementById('address').value = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(18.7009047, -70.1654584);
  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
        updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
</script>

<title>Reporte de tragedia</title>
<link rel='stylesheet' href='estilos.css'></link>
</head>
<body onload="initialize()">
  <center><div><label><h1>Reporte de tragedia <h1></label></div></center>
 <form class='contacto' method='POST' action=''>
<div><label>Nombre:</label><input type='text' maxlength="25" name="txtnombre"required></textarea></div> 
<div><label>Email:</label><input type="text" maxlength="25"  name ="txtemail"   required ></div>
<div><label>Telefono:</label><input type='text' maxlength="14"name="txttelefono" required ></div>
<div><label>Descripcion:</label><textarea  maxlength="100"  rows='5'name="txtdescripcion" required ></textarea></div>
<div><label>Ubicacion:</label></div>
<div id="googleMap" style="width:350px;height:300px;"></div>
<div><input type='submit' value='Enviar reporte'></div>
<div id="infoPanel">
              <div><input id="info" type='hidden'name="ubicacion" required ></div>
        <div><input id="address" type='hidden'name="direcion" required ></div>
  </div>
 </form>

</body>
</html>
<?php 

include_once("motor.php");
$reportado = new reporte();
if ($_POST) {
 
 $reportado->nombre=$_POST['txtnombre'];
 $reportado->email=$_POST['txtemail'];
 $reportado->telefono=$_POST['txttelefono'];
 $reportado->descripcion=$_POST['txtdescripcion'];
 $reportado->ubicacion=$_POST['ubicacion'];
 $reportado->direcion=$_POST['direcion'];
 $reportado->agregar();
 file_get_contents('http://adamix.net/practica/?m=SP011001&t=final &e=20121162&op=Agregaron tragedia');

}


 ?> 









