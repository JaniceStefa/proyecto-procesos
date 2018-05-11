<?php
session_start();
session_destroy();
echo 'cerraste sesión';
echo '<script> window.location="index.php"; </script>';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Saliendo...</title>
</head>
<body>
	<script> language="javascript">location.href= "index.php"</script>
</body>
</html>