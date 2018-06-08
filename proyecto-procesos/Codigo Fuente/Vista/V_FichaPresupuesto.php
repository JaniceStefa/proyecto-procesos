<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ficha Presupuesto</title>
	<link rel="stylesheet" href="../assets/css/fonts/style.css">
	<link rel="stylesheet" href="../assets/css/V_ficha_presupuesto.css">
</head>
<body>
	<div class="titulo">
		<h1>Ficha de Presupuesto</h1>
	</div>
	<form action="../index_Presupuesto.php" method="post" >
		<label>Costo Total</label>
		<input type="number" name="codpresupuesto">
		<label>Costo Parcial(a Pagar)</label>
		<input type="number" name="precioparcial">
		<label>Fecha de entrega (finalizada)</label>
		<input type="date" name="fechaentrega">
		<span class="icon-printer"></span><a href="../assets/pdf/imprimir_presupuesto.php">Imprimir Ficha Presupuesto</a>
		<button type="submit" name="generar" class="btnGenerar">Enviar</button>	
		<button type="reset" class="btnCancelar">Cancelar</button>
	</form>
</body>
</html>