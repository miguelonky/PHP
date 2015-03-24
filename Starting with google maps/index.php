
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEhRAlviIF1L05dZamK10CP-G6A6hmxRc&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(18.7009047,-70.1654584),
  zoom:8,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:new google.maps.LatLng(18.7009047,-70.1654584),
  animation:google.maps.Animation.BOUNCE,
  icon:'alert-copia.png'
  });

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"crimen!"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<title>Reporte de crimen</title>
</head>

<body>
 <div align="right"><a href="admin/crimenes.php" >admin</a></div> 
<center><h1>Mapa de crimenes </h1> 
<div id="googleMap" style="width:750px;height:500px;"></div>


<div >
<a href="lib/reporte.php" target="_self"> <input type="button" name="btn_reporte" value="Reportar " /> </a>
</div>	
	
<iframe
  width="450"
  height="250"
  frameborder="0" style="border:0"
 src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEhRAlviIF1L05dZamK10CP-G6A6hmxRc&q=record+stores+in+Seattle"> 
</iframe>	

</body>



</html>
