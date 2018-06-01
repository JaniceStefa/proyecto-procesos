<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garras | Pagina Oficial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="shortcut icon" href="assets/icono_pestania.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/PaginaOficial/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/magnific-popup.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="assets/PaginaOficial/fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/PaginaOficial/js/modernizr-2.6.2.min.js"></script>

	<!-- Flexslider  -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/PaginaOficial/css/owl.theme.default.min.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="assets/PaginaOficial/css/bootstrap-datepicker.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>
	<div id="page">
		<!-- Navegacion -->
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Empresa Garras</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Inicio</a></li>
								<li><a href="vista/V_catalogo_productos.php"> Productos</a></li>
								<li><a href="vista/V_contacto.php">Contactanos</a></li>
								<li><a href="controlador/index_pedido.php"><i class="icon-shopping-cart"></i> Pedidos </a></li>
								<?php 
								session_start();
								include "modelo/serv.php";
							    if (isset($_SESSION['user'])){
								?>
								<li><a href="controlador/c_validar_logout.php""><i class="icon-user2"></i> Cerrar Sesión </a></li>
								<?php 
								} else { ?>
								<li><a href="vista/V_login.php"><i class="icon-user2"></i> Inicio Sesión </a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Inicio -->
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(assets/PaginaOficial/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Ropa </h1>
					   					<h2 class="head-2">Deportiva</h2>
					   					<h2 class="head-3">Colección</h2>
					   					<p class="category"><span>Polos, Buzos, Casacas y Shorts</span></p>
					   					<p><a href="vista/V_catalogo_productos.php" class="btn btn-primary">Cátalogo de Productos</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(assets/PaginaOficial/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Confecciones</h1>
					   					<h2 class="head-2">de</h2>
					   					<h2 class="head-3">Ropa Deportiva</h2>
					   					<p class="category"><span>Polos, Buzos, Casacas y Shorts</span></p>
					   					<p><a href="vista/V_catalogo_productos.php" class="btn btn-primary">Catálogo de Productos</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>


		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Nuestros Productos</span></h2>
						<p>"El deporte es una de las mejores manera de liberar el estres, mejorar la salud y ampliar nuestras redes de contacto hazlo con estilo, y que mejor que con nuestros productos"
						</p>
						<p>
						Tenemos la mejor gama en ropa deportiva, vea nuestros diseños
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(assets/PaginaOficial/images/item-9.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3>Floral Dress</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(assets/PaginaOficial/images/item-9.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3>Floral Dress</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(assets/PaginaOficial/images/item-9.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3>Floral Dress</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(assets/PaginaOficial/images/item-9.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3>Floral Dress</a></h3>
							</div>
						</div>
					</div>
				</div>

				<p><a href="vista/V_catalogo_productos.php" class="btn btn-primary">Ver más productos</a></p>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 colorlib-widget">
						<h4>Sobre nuestra tienda</h4>
						<p>Acercate a nuestro local ubicado en Gamarrita Huanca y conoce más de nuestros productos. Te esperamos.</p>
						<p>
						</p>
					</div>

					<div class="col-md-2 colorlib-widget">
						<h4>Información</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="vista/V_contacto.php">Sobre nosotros</a></li>
								<li><a href="#">Información de envío</a></li>
								<li><a href="vista/V_terminos_condiciones.php">Politica de Privacidad</a></li>
								<li><a href="#">Seguimiento de Pedido</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 ">
						<h4>Páginas y Noticias</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">Blog</a></li>
							<li><a href="http://www.eltiempo.com/noticias/ropa-deportiva">Noticias</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Información de contacto</h4>
						<ul class="colorlib-footer-links">
							<li>Jr. Huanuco N° 222 <br> Huancayo </li>
							<li>935993138 </li>
							<li>romega@hotmail.com</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados </span> 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="assets/PaginaOficial/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/PaginaOficial/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/PaginaOficial/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/PaginaOficial/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/PaginaOficial/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="assets/PaginaOficial/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/PaginaOficial/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/PaginaOficial/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="assets/PaginaOficial/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="assets/PaginaOficial/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="assets/PaginaOficial/js/main.js"></script>

	</body>
</html>

