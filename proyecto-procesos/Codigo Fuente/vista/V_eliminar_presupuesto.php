<?php  
	$cod_presupuesto=$_GET['c'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Presupuesto</title>
	<link rel="stylesheet" href="../assets/css/V_eliminar_presupuesto.css">
</head>
<body>
	<div class="titulo">
		<h1>Confirmación</h1>
	</div>
	<form action="../index_Presupuesto.php" method="post">
		<h2>¿Esta seguro de eliminar el registro?</h2	>
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto" value="<?php echo $cod_presupuesto=$_GET['c']; ?>" readonly>
		<button type="submit" name="eliminar" class="btnEliminar">Confirmar</button>
		<button name="cancelar" class="btnEliminar">Cancelar</button>
	</form>
	
</body>
</html>
