<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garras | Pagina Oficial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="shortcut icon" href="../assets/icono_pestania.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/magnific-popup.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/style.css">

	<!-- Modernizr JS -->
	<script src="../assets/PaginaOficial/js/modernizr-2.6.2.min.js"></script>

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/PaginaOficial/css/owl.theme.default.min.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="../assets/PaginaOficial/css/bootstrap-datepicker.css">

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
							<div id="colorlib-logo"><a href="../index.php">Empresa Garras</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="../index.php">Inicio</a></li>
								<li><a href="../vista/V_catalogo_productos.php"> Productos</a></li>
								<li  class="active" ><a href="../vista/V_contacto.php">Contactanos</a></li>
								<li><a href="../vista/V_ficha_pedido.php"><i class="icon-shopping-cart"></i> Pedidos </a></li>
								<?php 
								session_start();
								include "../modelo/serv.php";
							    if (isset($_SESSION['user'])){
								?>
								<li><a href="../controlador/c_validar_logout.php""><i class="icon-user2"></i> Cerrar Sesión </a></li>
								<?php 
								} else { ?>
								<li><a href="../vista/V_login.php"><i class="icon-user2"></i> Inicio Sesión </a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Términos y Condiciones</h3>
						<div class="col-md-12">
						<p align="justify">Este documento describe los términos y condiciones generales (los "Términos y Condiciones Generales") y las políticas de privacidad (las "Políticas de Privacidad") aplicables al acceso y uso de los servicios ofrecidos por GARRAS S.A.C. ("los Servicios") dentro del sitio www.garras.com.pe, sus subdominios y/u otros dominios (urls) relacionados (en adelante "garras.com" o el "Sitio"), en donde éstos Términos y Condiciones se encuentren. Cualquier persona que desee acceder y/o suscribirse y/o usar el Sitio o los Servicios podrá hacerlo sujetándose a los Términos y Condiciones Generales y las Políticas de Privacidad, junto con todas las demás políticas y principios que rigen garras.com.pe y que son incorporados al presente directamente o por referencia o que son explicados y/o detallados en otras secciones del Sitio. En consecuencia, todas las visitas y todos los contratos y transacciones que se realicen en este Sitio, así como sus efectos jurídicos, quedarán regidos por estas reglas y sometidos a la legislación aplicable en Perú.</p>
						<p align="justify">	Los Términos y Condiciones y las Políticas de Privacidad contenidos en este instrumento se aplicarán y se entenderán como parte integral de todos los actos y contratos que se ejecuten o celebren mediante los sistemas de oferta y comercialización comprendidos en este sitio entre los usuarios de este sitio y GARRAS PERÚ S.A.C. (en adelante "GARRAS PERÚ S.A.C.", "GARRAS" o "la Empresa", indistintamente), y por cualquiera de las otras sociedades o empresas que sean filiales o vinculadas a ella, y que hagan uso de este sitio, a las cuales se las denominará en adelante también en forma indistinta como las "Empresas", o bien la "Empresa Oferente", el "Proveedor" o la "Empresa Proveedora", según convenga al sentido del texto.	</p>
						<p align="justify"> En caso que las Empresas hubieran fijado sus propios Términos y Condiciones y sus Políticas de Privacidad para los actos y contratos que realicen en este sitio, ellas aparecerán en esta página señalada con un link o indicada como parte de la promoción de sus ofertas y promociones y prevalecerán sobre éstas. CUALQUIER PERSONA QUE NO ACEPTE ESTOS TÉRMINOS Y CONDICIONES GENERALES Y LAS POLÍTICAS DE PRIVACIDAD, LOS CUALES TIENEN UN CARÁCTER OBLIGATORIO Y VINCULANTE, DEBERÁ ABSTENERSE DE UTILIZAR EL SITIO Y/O LOS SERVICIOS.
						</p>
						<p align="justify">	El Usuario debe leer, entender y aceptar todas las condiciones establecidas en los Términos y Condiciones Generales y en las Políticas de Privacidad de GARRAS PERÚ S.A.C. así como en los demás documentos incorporados a los mismos por referencia, previo a su registro como Usuario de garras.com.pe y/o a la adquisición de productos y/o entrega de cualquier dato, quedando sujetos a lo señalado y dispuesto en los Términos y Condiciones. 
						</p>
						<p align="justify">	Cuando usted visita garras.com.pe se está comunicando con GARRAS de manera electrónica. En ese sentido, usted brinda su consentimiento para recibir comunicaciones de GARRAS por correo electrónico o mediante la publicación de avisos en su portal.
						</div>
						</p>
					</div>

				</div>
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
								<li><a href="../vista/V_contacto.php">Sobre nosotros</a></li>
								<li><a href="#">Información de envío</a></li>
								<li><a href="../vista/V_terminos_condiciones.php">Politica de Privacidad</a></li>
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
	<script src="../assets/PaginaOficial/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../assets/PaginaOficial/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/PaginaOficial/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../assets/PaginaOficial/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../assets/PaginaOficial/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="../assets/PaginaOficial/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../assets/PaginaOficial/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/PaginaOficial/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../assets/PaginaOficial/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="../assets/PaginaOficial/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="../assets/PaginaOficial/js/main.js"></script>

	</body>
</html>


<html lang="es">
<head>
	<link href="estilosforms.css" rel="stylesheet" />
	<meta charset="UTF-8">
	<title>Ficha Pedido </title >
</head>
<body>
	<H1>Terminos y condiciones</H1>
	
</a><br>
</body>