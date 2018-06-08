<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Presupuesto</title>
	<link rel="stylesheet" href="assets/css/V_Presupuesto.css">
</head>
<body>
	<div class="maintitulo">
		<h1>PRESUPUESTOS</h1>
	</div>
	<div class="tabla">
		<table border="1">
				<tr class="cabecera">
					<td>Código Presupuesto</td>
					<td>Fecha Entrega</td>
					<td>Fecha Pago parcial</td>
					<td>Precio Parcial</td>
					<td>Precio Total</td>
					<td>Código Pedido</td>
					<td>Estado</td>
					<td>Actualizar</td>
					<td>Activo/Inactivo</td>
				</tr>
			<?php  
				foreach($this->modelo->Mostrar() as $registro){
					echo "<tr class='contenidotable'><td>".$registro["cod_presupuesto"]. "</td>";
					echo "<td>".$registro["fecha_entrega"]. "</td>";
					echo "<td>".$registro["fecha_pago_parcial"]. "</td>";
					echo "<td>".$registro["precio_parcial"]. "</td>";
					echo "<td>".$registro["precio_total"]. "</td>";
					echo "<td>".$registro["cod_pedido"]. "</td>";
					echo "<td>".$registro["estado"]. "</td>";
					echo "<td><button type='submit' name='actualizar' class='btnModificar'><a class='btn' href='Vista/V_actualizar_presupuesto.php?c=".$registro['cod_presupuesto']." && cpe=".$registro['cod_pedido']." && fe=".$registro['fecha_entrega']." && fpp=".$registro['fecha_pago_parcial']." && pp=".$registro['precio_parcial']." && pt=".$registro['precio_total']."'>Actualizar</a></button></td>";
					echo "<td><button type='submit' name='eliminar' class='btnEliminar'><a class='btn' href='Vista/V_eliminar_presupuesto.php?c=".$registro['cod_presupuesto']." && cpe=".$registro['cod_pedido']."'>Activo/Inactivo</a></button></td>";
				}
			?>
			</table>
	</div>
	
	<div class="nuevopresupuesto">
		<form action="Vista/V_generar_presupuesto.php">
			<button type="submit" class="btnAgregar">Generar Nuevo Presupuesto</button>	
		</form>	
		<form action="Vista/V_generar_presupuesto.php">
			<button type="submit" class="btnAgregar">Generar Presupuesto</button>	
		</form>		
	</div>


</body>
</html>