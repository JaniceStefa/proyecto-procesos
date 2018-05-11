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
				$log = mysqli_query($mysql,"SELECT * from admin where user = '$usuario' and pw='$pw'");
				if (mysqli_num_rows($log)>0){
					$row = mysqli_fetch_array($log);
					$_SESSION["user"] = $row['user'];
					echo 'Iniciando sesión para',$_SESSION['user'].'<p>';
					echo '<script> window.location="panel.php"; </script>';
				}
				else{
					echo'<script> alert ("Usuario o contraseña incorrectos."); </script>';
					echo'<script> window.location="index.php"; </script>';
				}

			}


		?>
	
</body>
</html>