<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Presupuesto</title>
</head>
<body>
	<form action="../index_Presupuesto.php" method="post">
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto" value="<?php echo $cod_presupuesto=$_GET['c']; ?>" >
		<label>Fecha Entrega</label>
		<input type="text" name="fechaentrega" value="<?php echo $fechaentrega=$_GET['fe']; ?>" >
		<label>Fecha Pago Parcial</label>
		<input type="text" name="fechapagoparcial" value="<?php echo $fechapagoparcial=$_GET['fpp']; ?>" >
		<label>Precio Parcial</label>
		<input type="text" name="precioparcial" value="<?php echo $precioparcial=$_GET['pp']; ?>" >
		<label>Precio Total</label>
		<input type="text" name="preciototal" value="<?php echo $preciototal=$_GET['pt']; ?>" >
		<label>Código Pedido</label>
		<input type="text" name="codigopedido" value="<?php echo $cod_pedido=$_GET['cpe']; ?>">
		<button type="submit" name="actualizar">Guardar Cambios</button>	
		<button type="reset">LIMPIAR</button>
	</form>
</body>
</html>