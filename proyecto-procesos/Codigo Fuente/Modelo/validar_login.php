<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Validando...</title>
</head>
<body>
		<?php
			include 'serv.php';
			
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];
				$log = mysqli_query($mysql,"SELECT * from usuario where DNI = '$usuario' and contrasenia='$pw'");
				if (mysqli_num_rows($log)>0){
					$row = mysqli_fetch_array($log);	
					$_SESSION['user'] = $row['DNI'];
					$_SESSION['privilegio']=$row['tipo_acceso']; //Guarda el dni con el que se esta iniciando sesion 
					//$privilegio= $row['tipo_acceso'];
					echo '<script> window.location= "../controlador/index_persona.php"; </script>';
				}else{
				echo'<script> alert ("DNI o contraseña incorrectos."); </script>';
				echo'<script> window.location="../vista/V_login.php"; </script>';
				}
		}?>
	
</body>
</html>