<?php 
include("lib/motor.php");
 if(isset($_GET['director'])){
$rp=mysqli_query(conexion::obtenerInstancia(),"select * from peliculas where director = '{$_GET['director']}' ");
	      $var=1;
	      if(mysqli_fetch_array($rp)==null) {
	      header("Location:index.php");

	      }


}
?>

<!DOCTYPE HTML>
<head>
<title>Movies Store </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="contact.php">Contactos</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="contact.php">Registrar</a></li>
							<li><a href="contact.php">Iniciar seccion</a></li>
							<li><a href="preview.php">Compra</a></li>
							<li><a href="#">Pago</a></li>
							<li><a href="#">Mi cuenta</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
						  <div  hidden class="cart">
						  	   <p><span>carro</span><div id="dd" class="wrapper-dropdown-2"> (vacio)
						  	   	<ul class="dropdown">
										<li>No ahy peliculas en tu carrito</li>
								</ul></div></p>
						  </div>
							  <div class="search_box">
					     		<form method="get" action="buscar.php">
					     			<input type="text"  name="Busqueda"value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar';}"><input type="submit" value="">
					     		</form>
					     	</div>
						 <div class="clear"></div>
					</div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			 <div class="clear"></div>
  		</div>     
				
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
  	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Inicio</a> &gt;&gt; 
    		<a href="#" >Director</a>&gt;&gt;
    		 <a href="todas.php" class='active'><?php if (isset($_GET['director']))echo $_GET['director']; ?></a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    <?php	if (isset($_GET['director']))	echo "<h3>Director : {$_GET['director']}</h3>";?>
    		</div>
    	</div>
	      <div class="section group">
	      <?php  
	      //ORDER BY id_auto_increment DESC LIMIT 3
           if (isset($_GET['director'])){
	      $ra=mysqli_query(conexion::obtenerInstancia(),"select * from peliculas where director = '{$_GET['director']}' ");
	      $var=1;
	      while ($Estreno = mysqli_fetch_array($ra)) {
	      	
	      	
				 echo "<div class='grid_1_of_5 images_1_of_5'>
					 <a href='preview.php?id={$Estreno['id']}'><img src='images/{$Estreno['imagen']}' alt='' /></a>
					 <h2><a href='preview.php?id={$Estreno['id']}'>{$Estreno['nombre']}</a></h2>
					<div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'>$.RD {$Estreno['precio']}</span></p>
					    </div>
					       		<div class='add-cart'>								
									<h4><a href='preview.php?id={$Estreno['id']}'>Comprar</a></h4>
							     </div>
							 <div class='clear'></div>
					</div>					 
				</div> ";
                if($var==5){
                echo"<div class='section group'>";
                $var=0;
                }
                $var++;
				}
              }
				?>
								
				
							     
				
			
			
       
  
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Informacion</h4>
						<ul>
						<li><a href="#">Acerca de nosotros</a></li>
						<li><a href="contact.php">Contacto</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Interes</h4>
						<ul>
						<li><a href="#">Especiales</a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Mi cuenta</h4>
						<ul>
							<li><a href="contact.php">Iniciar seccion</a></li>
							<li><a href="index.php">Ver mi carro </a></li>
							<li><a href="#">Mi lista de deceos</a></li>
							<li><a href="contact.php">Ayuda</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contactos</h4>
						<ul>
							<li><span>809-590-1984</span></li>
							<li><span>809-590-1985</span></li>
							
						</ul>
						
				</div>
				<div class="col_1_of_4 span_1_of_4">
					
						<div class="social-icons">
							<h4>Siguenos en</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			 <div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  Miguelonky</a> </p>
		   </div>			
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>