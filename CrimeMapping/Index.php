<?php
	include_once("motor.php");
	
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" http-equiv="content-type" content="text/html; charset=UTF-8"/> 
		<title>Crime Mapping</title>
		<link href="css/Index.css" rel="stylesheet"></link>
		<script src="http://maps.google.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script> 
		
	
	<script type="text/javascript">
		function initialize(){
		
				var posicion = new google.maps.LatLng(18.549381,-69.813995);
				var settings = {
					zoom: 8,
					center: posicion
				};
				
				var map = new google.maps.Map(document.getElementById("map"), settings);
				
				<?php   mostrar(); 	file_get_contents('http://adamix.net/practica/?m=SP011001&t=final &e=20121162&op=Mostre_el_mapa');?>
				
		}
	</script>
	
	
	</head>
	
	<body onload="initialize()">
		
		<div id="sandbar">
			<header id="gc-googlebar">
				<a id="gc-logo" href="."><img src="img/CrimeMappingLogo3.png" ></img></a>
			</header>
		</div>
		<div id="gc-wrapper" itemscope="" itemtype="http://schema.org/Article">
			<div id="gc-topnav">
				<div>
					<ul>
						<li class>
							<a href=".">Inicio</a>
						</li>
						<li class>
							<a href="ReportarCrimen.php">Reportar crimen <?php    ?></a>
						</li>
						<li class>
							<a href="administracion.php">Administraci&oacute;n</a>
						</li>
					
					</ul>
				</div>
			</div>
			
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
		
	</body>

</html>