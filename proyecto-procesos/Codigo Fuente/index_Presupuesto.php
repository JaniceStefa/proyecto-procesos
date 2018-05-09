<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Presupuesto</title>
</head>
<body>
	<?php 
		require_once("Controlador/C_Presupuesto.php");
		$controlador=new C_Presupuesto();
		$controlador->Index();
		if(isset($_POST['generar']))
			$controlador->Agregar();
		if(isset($_POST['actualizar']))
			$controlador->Cambiar();
		if(isset($_POST['eliminar']))
			$controlador->Eliminar();
		
	?>
</body>
</html>