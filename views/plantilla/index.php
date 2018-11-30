<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php
		include("views/layout/link.php") 
	?>
</head>

<body>
	<!-- SLIDER -->
	<div id="contenido">
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">
			<div class="flexslider">				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h3 id="letra" align="center" class="to-animate" >-Hotel Jardín-</h3>
							<h3 id="letra2" class="to-animate">¡El mejor lugar para tu descanso!</h3>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url();" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url();" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url();" width:1280px; height: 853px;" data-stellar-background-ratio="0.5"></li>
			  	</ul>
			</div>			
		</div>
		
		<!-- MENU -->
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Inicio</a>
						<a href="#" data-nav-section="about">Promociones</a>
						<a href="#" data-nav-section="features">Reservar</a>
					</div>
					<div class="fh5co-logo">
						<a href="index.html" id="letra1">HJ</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Restaurante</a>
						<a href="#" data-nav-section="events">Eventos</a>
						<a href="#" data-nav-section="reservation">Contactanos</a>
					    <a class="pagina" data-menu="Menu Principal" data-titulo="Calificaciones" data-control="ControlLogin">Login</a>
					</div>
				</div>			
			</div>
		</div>
		
		<!-- QUIENES SOMOS -->
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url()"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">Acerca de Nosotros</h2>
				<p align="justify" class="to-animate"><span class="firstcharacter">H</span>otel Jardín surge de la idea de crear un espacio ambientado con las tradiciones y cultura que caracterizan a nuestro pueblo y que brinde la calidez, comodidad y armonía de nuestra gente a los turistas, visitantes, y demás curiosos que arriben a esta bella ciudad. Ofreciéndoles además la experiencia de degustar la deliciosa gastronomía, mientras contemplan las maravillosas vistas que ofrece el centro, corazón de esta ciudad. </p>
				<p class="text-center to-animate"><a class="btn btn-primary btn-outline">¡Reservar!</a></p>
			</div>
		</div>
	
		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<blockquote>
									<p>&ldquo;Hospedate con nosotros 10 noches y la 11 va por nuestra cuenta.&rdquo;</p>
									<p class="quote-author">&mdash; Hotel Jardín</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Hospedate con nosotros 10 noches y la 11 va por nuestra cuenta.&rdquo;</p>
									<p class="quote-author">&mdash; Hotel Jardín</p>
								</blockquote>
							</li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- OTRO -->

		<div id="fh5co-featured" data-section="features">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Reservar Habitación</h2>
						<p class="sub-heading to-animate">Ven y conoce nuestras habitaciones, con la mejor privacidad que usted necesita y el mejor trato que merece.</p>
					</div>
				</div>
		
			<div id="Formulario">
				<?php include("views/reservar/viewFiltro.php") ?> 
			</div>

			<p class="sub-heading to-animate">***************************************************************************************************************************************************************</p>

			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<p class="sub-heading to-animate">Tenemos los mejores precios al alcance de tu economia.</p>
				</div>
			</div>
					<?php include("views/habitaciones/viewHabitacionesPr.php") ?>
					<?php include("views/reservar/viewReservar.php") ?> 
			</div>
		</div>
			
			

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				
			</div>
		</div>

		<div id="fh5co-events" data-section="events" style="background-image: url(../images/color.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				
				
			</div>
		</div>
		 <!-- Reservacion e informacion -->

		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">¡Reserva Ya!</h2>
						    <div class="form-group ">
							<input class="btn btn-primary" value="!! Reserva ¡¡" type="submit">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Para más información </h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address">
								<i class="icon-home"></i>
								Av. Jose Maria Andraca #104. 301, Colonia Centro, Chilapa de Álvarez.
								<br>Hotel Jardin
							</li>
							<li><i class="icon-phone"></i> (756) 465-6789</li>
							<li><i class="icon-envelope"></i>hoteljardin@gmail.com</li>
							<li><i class="icon-facebook"></i> <a href="https://www.facebook.com/jorgealfonso.castrotacuba.7" target="_blank">Facebook Hotel Jardin</a></li>
						</ul> 
					</div>
				<div class="col-md-6 to-animate-2">
					<h3>Ubicación</h3>
    			    	<div class="col-6">
    			        	<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3803.1975521162926!2d-99.18040098564403!3d17.593351501464017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAv.+Jose+Maria+Andraca+%23104.+301%2C+Colonia+Centro%2C+Chilapa+de+%C3%81lvarez.!5e0!3m2!1ses!2sus!4v1542784716909" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>		
    			        	</iframe>
    			    	</div>
    		        </div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>

<div>
	<?php
    include("views/layout/footer.php")
	?>
</div>
  	
</body>
