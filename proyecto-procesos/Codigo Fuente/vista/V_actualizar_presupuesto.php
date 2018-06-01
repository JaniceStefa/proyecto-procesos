<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Presupuesto</title>
	<link rel="stylesheet" href="../assets/css/V_actualizar_presupuesto.css">
</head>
<body>
	<div class="titulo">
		<h1>Actualizar Datos</h1>
	</div>
	<form action="../index_Presupuesto.php" method="post">
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto" value="<?php echo $cod_presupuesto=$_GET['c']; ?>" readonly>
		<label>Fecha Entrega</label>
		<input type="text" name="fechaentrega" value="<?php echo $fechaentrega=$_GET['fe']; ?>" >
		<label>Fecha Pago Parcial</label>
		<input type="text" name="fechapagoparcial" value="<?php echo $fechapagoparcial=$_GET['fpp']; ?>" >
		<label>Precio Total (S/.)</label>
		<input type="number" name="preciototal" min="1.00" value="<?php echo $preciototal=$_GET['pt']; ?>" >
		<label>Código Pedido</label>
		<input type="text" name="codigopedido" value="<?php echo $cod_pedido=$_GET['cpe']; ?>">
		<button type="submit" name="actualizar" class="btnActualizar">Guardar Cambios</button>	
		<button name="cancel" class="btnActualizar">Cancelar</button>	
	</form>
</body>
</html>