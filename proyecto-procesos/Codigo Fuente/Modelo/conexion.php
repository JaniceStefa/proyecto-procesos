<?php
	$db['host']='localhost';
	$db['user']='root';
	$db['pass']='';
	$db['dbname']='proyectoprocesos';

	foreach ($db as $key => $value) {
		define(strtoupper($key),$value);
	}

	$conexion=mysqli_connect(HOST,USER,PASS,DBNAME);
	mysqli_set_charset($conexion,"utf8");

	if(!$conexion){
		die("Error al conectar en la base de datos");
	}
?>