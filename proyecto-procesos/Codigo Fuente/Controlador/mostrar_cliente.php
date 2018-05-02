<?php
	require_once("../Modelo/M_registrar_cliente.php");
	$clientes=new M_registrar_cliente();
	$datos=$clientes->MostrarCliente();
	require_once("V_registrar_cliente.php");

?>

