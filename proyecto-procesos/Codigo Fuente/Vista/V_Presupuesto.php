<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Presupuesto</title>
	<link rel="stylesheet" href="assets/css/index_Presupuesto.css">
</head>
<body>
	<form action="">
		<label>Buscar</label>
		<input type="text" name="txtbuscar">
		<button type="submit"><a href="Vista/V_generar_presupuesto.php">Generar Nuevo Presupuesto</a></button>	
	</form>

	<table border="1">
		<tr>
			<td>Código Presupuesto</td>
			<td>Fecha Entrega</td>
			<td>Fecha Pago parcial</td>
			<td>Precio Parcial</td>
			<td>Precio Total</td>
			<td>Código Pedido</td>
			<td>Estado</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</tr>
	<?php  
		foreach($this->modelo->Mostrar() as $registro){
			echo "<tr><td>".$registro["cod_presupuesto"]. "</td>";
			echo "<td>".$registro["fecha_entrega"]. "</td>";
			echo "<td>".$registro["fecha_pago_parcial"]. "</td>";
			echo "<td>".$registro["precio_parcial"]. "</td>";
			echo "<td>".$registro["precio_total"]. "</td>";
			echo "<td>".$registro["cod_pedido"]. "</td>";
			echo "<td>".$registro["estado"]. "</td>";
			echo "<td><button type='submit' name='actualizar'><a href='Vista/V_actualizar_presupuesto.php?c=".$registro['cod_presupuesto']." && cpe=".$registro['cod_pedido']." && fe=".$registro['fecha_entrega']." && fpp=".$registro['fecha_pago_parcial']." && pp=".$registro['precio_parcial']." && pt=".$registro['precio_total']."'>Actualizar</a></button></td>";
			echo "<td><button type='submit' name='eliminar' id='delete'>Eliminar</button></td>";
		}
	?>
	</table>
</body>
</html>