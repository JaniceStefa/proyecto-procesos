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
								<li><a href="../vista/V_contacto.php">Contactanos</a></li>
								<li class="active"><a href="../vista/V_ficha_pedido.php"><i class="icon-shopping-cart"></i> Pedidos </a></li>
								<?php 
								//session_start();
								include "../modelo/conectar_bd.php";
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

		<!--<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(../assets/PaginaOficial/images/cover.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Registro Pedido</h1>
				   					<h2 class="bread"><span><a href="../index.php">Inicio</a></span> <span><a href="../vista/V_catalogo_productos.php">Productos</a></span> <span>Pedidos</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>-->

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Ficha de Pedido</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Presupuesto</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Pedido Completado</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form method="post" class="colorlib-form"  action = "../controlador/index_pedido.php" name = "frm" >
							<h2>Ficha de Pedido</h2>

		              	<div class="row">
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="prodTipo"> Productos: </label>
			                    <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="producto" id="producto" class="form-control" required>
				                      	<option value="">Elige una opción </option>
						                <option value="1">Buzos</option> 
						                <option value="2">Casacas</option> 
						                <option value="3">Polos</option> 
						                <option value="4">Shorts</option> 
						                <optgroup label="Conjuntos Deportivos ">
						                    <option value="5">Buzos - Casacas</option>
						                    <option value="6">Polos - Shorts</option>
						                    <option value="7">Todo </option>
						                </optgroup>
			                        </select>
			                    </div>
			                  </div>

			               </div>
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="selTalla"> Tallas: </label>
			                    <div class="form-field">
			                     	<label class="container">	
							            <input type="checkbox" name="tallas" value="S" checked>  S</label>
							            <label class="container">
							            <input type="checkbox" name="tallas" value="M">  M</label>
							            <label class="container">
							            <input type="checkbox" name="tallas" value="L">  L</label>
							            <label class="container">
							            <input type="checkbox" name="tallas" value="XL">  XL</label>
			                    </div>
			                  </div>
			              </div>

			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="matTipo"> Materiales: </label>
			                    <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="material" id="material" class="form-control" required>
				                      	<option value="">Elige una opción </option>
						                <option value="1">Algodón </option> 
						                <option value="2">Sintético</option> 
						                <option value="3">Dryfit</option>
						                <option value="4">Suplex</option> 
						                <option value="5">Polyster</option> 
			                        </select>
			                    </div>
			                  </div>
			              </div>
			              <div class="form-group">
									<div class="col-md-5">
										<label for="cant">Cantidad</label>
										<input type="number" name="cantidad" id="cantidad" size=3 maxlength=3 min="1" max="500" class="form-control" required />
									</div>
						  </div>
						  <div class="form-group">
									<div class="col-md-5">
										<label for="fecha"> Fecha de entrega (solicitada):</label>
										 <input type="date" name="fecharequerida" class="form-control" />
									</div>
						  </div>
			               <div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
												<a href = "V_terminos_condiciones.php" >Leer los terminos y condiciones</a><br /><br />
											   <label><input type="checkbox" name="aceptoterms" required /> Acepto los términos y condiciones</label>
											</div>
										</div>
							</div>
							<div class="total-wrap">
								<div class="col-md-3">
									<input type="submit" name= "aceptar" value="Aceptar" class="btn btn-primary">
								</div>
								<div class="col-md-6">
									<input type="reset" value="Cancelar" class="btn btn-primary">
								</div>
							</div>
			            </div>
			            
		           		</form>
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

