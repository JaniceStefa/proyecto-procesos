<?php  
	$cod_presupuesto=$_GET['c'];
	$cod_pedido=$_GET['cpe'];
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
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto" value="<?php echo $cod_presupuesto=$_GET['c']; ?>" readonly>
		<label>Código Pedido</label>
		<input type="text" name="codigopedido" value="<?php echo $cod_pedido=$_GET['cpe']; ?>" readonly>
		<label>Estado</label>
		<select name="estado">
			<option value="activo">ACTIVO</option>
			<option value="inactivo">INACTIVO</option>
		</select>
		<button type="submit" name="eliminar" class="btnEliminar">Confirmar</button>			
	</form>
	
</body>
</html>
