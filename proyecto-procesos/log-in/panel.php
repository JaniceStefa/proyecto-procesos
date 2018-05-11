<?php
session_start();
#ob_start(); solo por si acaso
include 'serv.php';

if (isset($_SESSION['user'])){
	echo "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<div>
	<article>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae corporis officia possimus? Reiciendis ipsam, quos nostrum delectus veritatis hic tenetur, vero blanditiis optio dolore perferendis natus consequuntur, dignissimos atque expedita.</p>
	</article>
	<a href="logout.php"><button>Salir</button></a>
	</div>
</body>
</html>
<?php
}else{
	echo '<script> window.loaction = "index.php"; </script>';
}

#$profile = $_SESSION['user'];
?>