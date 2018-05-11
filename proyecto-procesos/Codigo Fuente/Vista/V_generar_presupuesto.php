<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Generar Presupuesto</title>
	<link rel="stylesheet" href="../assets/css/V_generar_presupuesto.css">
</head>
<body>
	<div class="titulo">
		<h1>Generar Nuevo Presupuesto</h1>
	</div>
	<form action="../index_Presupuesto.php" method="post" >
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto">
		<label>Fecha Entrega</label>
		<input type="date" name="fechaentrega">
		<label>Fecha Pago Parcial</label>
		<input type="date" name="fechapagoparcial">
		<label>Precio Total</label>
		<input type="number" name="preciototal">
		<label>Código Pedido</label>
		<input type="text" name="codigopedido">
		<label>Estado</label>
		<select name="estado">
			<option value="activo">Activo</option>
		</select>		
		<button type="submit" name="generar" class="btnGenerar">GENERAR</button>	
		<button type="reset" class="btnLimpiar">LIMPIAR</button>
	</form>
</body>
</html>