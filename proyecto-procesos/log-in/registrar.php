
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="registrar.php" method ="POST"> 
		<input type="text" name="nombre" size="20" autocomplete="off"><br>
		<input type="password" name="password" size = "20" autocomplete="off"><br>
		<input type="submit" value="guardar" name ="B1">

	</form>
	
</body>
</html>
<?php
include 'serv.php';
	$nombre = $_POST['nombre'];
	$password = $_POST['password'];
	#$fecha = date ("d-m-Y");

	$Insertar = $mysql -> real_query ("INSERT INTO admin (user,pw) VALUES ('$nombre','$password')");
?>