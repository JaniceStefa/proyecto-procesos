<?php 
	session_start();
	include "serv.php";
	if(isset($_SESSION["user"])){
		echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name= "viewport"  charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<style>
	<title>loginAdmin</title>
	
	</style>
</head>
<body>

	<h1 class="h1" >Login</h1>
	<form method="post" action="validar.php">
		<label for="usuario">Nro. DNI</label>
		<input type="text" class="form-control" name="user" autocomplete="off" required><br><br>
		<label for="password">Password</label>
		<input type="password" class="form-control" name="pw" autocomplete="off" required><br><br>		
		<input type="submit" class="btn btn-success" name="login" value="Entrar">

	</form>
</body>
</html>