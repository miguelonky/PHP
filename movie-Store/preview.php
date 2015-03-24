<?php 
include("lib/motor.php");

?>

<!DOCTYPE HTML>
<head>
<title> Movies Store | preview </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
					     			<input type="text"  name="Busqueda" value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar';}"><input type="submit" value="">
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
   		</div>
   </div>
   <div class="main">
   	 <div class="wrap">
   	 	

<?php 
if (isset($_GET['id'])){
	$ra=mysqli_query(conexion::obtenerInstancia(),"select * from peliculas  where id ='{$_GET['id']}'");
	      $var=1;
	      while ($Estreno = mysqli_fetch_array($ra)) {
	echo"<div class='content_top'>
    		<div class='back-links'>
    		<p><a href='index.php'>Inicio</a> &gt;&gt;
    		<a href='genero.php?genero={$Estreno['genero']}'>{$Estreno['genero']}</a> &gt;&gt;
    		<a href='director.php?director={$Estreno['director']}'>{$Estreno['director']}</a> &gt;&gt;
    		<a href='guion.php?guion={$Estreno['guion']}'>{$Estreno['guion']}</a> &gt;&gt;
    		<a href='pais.php?pais={$Estreno['pais']}'>{$Estreno['pais']}</a> &gt;&gt;
    		<a href='idioma.php?idioma={$Estreno['idioma']}'>{$Estreno['idioma']}</a> &gt;&gt;
    	     <a href='fecha.php?fecha={$Estreno['ano']}'>{$Estreno['ano']}</a> &gt;&gt;
    		 <a href='#'class='active'>{$Estreno['nombre']}</a></p>
    	    </div>
    		<div class='clear'></div>
    	</div>
   	 	<div class='section group'>";

		      	 echo "<div class='cont-desc span_1_of_2'>
				  <div class='product-details'>				
					<div class='grid images_3_of_2'>
						<img src='images/{$Estreno['imagen']}'alt='' />
				  </div>
				<div class='desc span_3_of_2'>
					<h2>{$Estreno['nombre']} </h2>
					<div class='price'>
						<p>Precio: <span>$.RD {$Estreno['precio']}</span></p>
					</div>
					<div class='available'>
						<ul>
						  <li><span>Género:</span> &nbsp; {$Estreno['genero']}</li>
						  <li><span>Director:</span>&nbsp; {$Estreno['director']}</li>
						  <li><span>Guión:</span>&nbsp; {$Estreno['guion']}</li>
						  <li><span>Pais:</span>&nbsp; {$Estreno['pais']}</li>
						  <li><span>Idioma:</span>&nbsp;{$Estreno['idioma']}</li>
						  <li><span> Año:</span>&nbsp; {$Estreno['ano']}</li>
					    </ul>
					</div>
				<div class='share-desc'>
					<div class='share'>
						<p>Cantidad:</p><input class='text_box' type='text'>				
					</div>
					<div class='button'><span><a href='compra.php'>Solicitar</a></span></div>					
					<div class='clear'></div>
				</div>
				 <div hidden class='wish-list'>
				 	<ul>
				 		<li class='wish'><a href='#'>Agregar a lista  de deceo</a></li>
				 	    <li class='compare'><a href='#'>Agregar para comparar</a></li>
				 	</ul>
				 </div>
			</div>
			<div class='clear'></div>
		  </div>
		<div class='product_desc'>	
			 <h2>Sinopsis :</h2>
			   <p>{$Estreno['sinopsis']}</p>
	   </div>
   </div> ";
             

           }

	


}

 ?>

				
				<div class="rightsidebar span_3_of_1 sidebar">
					<h2>Especiales</h2>
					 	<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/end-game.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.php">End Game</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Comprar</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.php"><img src="images/Coraline.jpg" alt="" /></a>
					 		 </div>

					 		   <div class="movie_desc">
							    <h3><a href="preview.html">Coraline</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Comprar</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.html"><img src="images/Eclipse.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.html">Eclipse</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Comprar</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="preview.html"><img src="images/Priest.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.html">Priest 3D</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Comprar</a></span>
								 </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	    <div class="movie_poster">
					 		  <a href="preview.html"><img src="images/Sorority_Wars.jpg" alt="" /></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.html">Sorority Wars</a></h3>
								   <p><span>$620.87</span> &nbsp; $500.35</p>
								     <span><a href="#">Comprar</a></span>
								 </div>
								<div class="clear"></div>
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

