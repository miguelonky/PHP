
<!DOCTYPE HTML>
<head>
<title>Movies Store | Contact </title>
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
   		</div>
   </div>
 <div class="main">
 	<div class="wrap">
     <div class="content">
     	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Inicio</a> &gt;&gt; <a href="#" class="active">Contactos</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contactanos </h2>
					    <form method="post" action="contact-post.php">
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="userName" type="text" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Telefono</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Mensaje</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Enviar"  class="mybutton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Encuentranos aqui!</h2>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#888;text-align:left;font-size:0.85em">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h2>Informacion :</h2>
						    	<p>Calle orquidea #4,</p>
						   		<p>Andres Bocachica, santo domingo este,</p>
						   		<p>Republica Dominicana</p>
				   		<p>Telefono:809-590-1984</p>
				   		<p>Fax: 809-590-1984</p>
				 	 	<p>Email: <span><a href="#">20121162@itla.edu.do</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
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

