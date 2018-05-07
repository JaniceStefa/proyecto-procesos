<?php 
	require_once("../Modelo/M_registrar_cliente.php");
	$DNI=$_POST['dni'];
	$ApellidoPaterno=$_POST['apPaterno'];
	$ApellidoMaterno=$_POST['apMaterno'];
	$Nombres=$_POST['nombres'];
	$Direccion=$_POST['direccion'];
	$Telefono=$_POST['telefono'];
	$Email=$_POST['email'];
	$Contraseña=$_POST['contraseña'];
	$TipoAcceso=$_POST['tipoacceso'];
	$Estado=$_POST['estado'];
	$clientes=new M_registrar_cliente();
	$clientes->InsertarCliente($DNI,$ApellidoPaterno,$ApellidoMaterno,$Nombres,$Direccion,$Telefono,$Email,$Contraseña,$TipoAcceso,$Estado);
	
	?>