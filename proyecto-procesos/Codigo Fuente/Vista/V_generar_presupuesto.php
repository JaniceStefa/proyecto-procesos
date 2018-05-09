<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Generar Presupuesto</title>
</head>
<body>
	<form action="../index_Presupuesto.php" method="post">
		<label>Código Presupuesto</label>
		<input type="text" name="codpresupuesto">
		<label>Fecha Entrega</label>
		<input type="date" name="fechaentrega">
		<label>Fecha Pago Parcial</label>
		<input type="date" name="fechapagoparcial">
		<label>Precio Parcial</label>
		<input type="text" name="precioparcial">
		<label>Precio Total</label>
		<input type="text" name="preciototal">
		<label>Código Pedido</label>
		<input type="text" name="codigopedido">
		<label>Estado</label>
		<select name="estado">
			<option value="activo">Activo</option>
		</select>		
		<button type="submit" name="generar">GENERAR</button>	
		<button type="reset">LIMPIAR</button>
	</form>
</body>
</html>