<?php 
include("lib/motor.php");


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
						<div   class="header_top_right">
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
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	   <h3>Categorias</h3>
							      <li><a href="todas.php">Todas</a></li>
							      <li><a href="genero.php?genero=Accion">Acción</a></li>
							      <li><a href="genero.php?genero=romance">Romance</a></li>
							      <li><a href="genero.php?genero=drama">Drama</a></li>
							      <li><a href="genero.php?genero=faminiliar">Familiar</a></li>
							       <li><a href="genero.php?genero=comedia">Comedia</a></li>
							       <li><a href="genero.php?genero=fantacia">Fantasia</a></li>
							       <li><a href="genero.php?genero=infantil">Infantil</a></li>
							       <li><a href="genero.php?genero=musical">Musical</a></li>
							       <li><a href="genero.php?genero=terror">Terror</a></li>
							       <li><a href="genero.php?genero=ciencia ficcion">Ciencia ficcion</a></li>
							       <li><a href="genero.php?genero=Aventura">Aventura</a></li>
						  	 </ul>
						</div>					
		  	         </div>
						    <div class="header_bottom_right">					 
						 	    <!------ Slider ------------>
								  <div class="slider">
							      	<div class="slider-wrapper theme-default">
							            <div id="slider" class="nivoSlider">
							                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
							                <img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
							                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
							                <img src="images/4.jpg" data-thumb="images/4.jpg" alt="" />
							                 <img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
							            </div>
							        </div>
						   		</div>
						<!------End Slider ------------>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Estrenos</h3>
    		</div>
    	</div>
	      <div class="section group">
	      <?php  
	      //ORDER BY id_auto_increment DESC LIMIT 3

	      $ra=mysqli_query(conexion::obtenerInstancia(),"select * from peliculas where estatus='estreno' ORDER BY id DESC LIMIT 5");
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
				}
				?>
								
				
							     
				</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Especial de la semana</h3>
    		</div>
    	  </div>
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/beauty_and_the_beast.jpg" alt="" /></a>
					 <h2><a href="preview.php">Beauty and the beast</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php">Comprar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.php"><img src="images/Eclipse.jpg" alt="" /></a>
					 <h2><a href="preview.php">Eclipse</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php">Comprar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/Coraline.jpg" alt="" /></a>
					 <h2><a href="preview.php">Coraline</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.75</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php">Comprar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/Unstoppable.jpg" alt="" /></a>
					 <h2><a href="preview.php">Unstoppable</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php">Comprar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.php"><img src="images/Priest.jpg" alt="" /></a>
					 <h2><a href="preview.php">Priest 3D</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$679.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php">Comprar</a></h4>
							     </div>
							 <div class="clear"></div>
					 </div>				     
				</div>
			</div>
       </div>
  </div>
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

