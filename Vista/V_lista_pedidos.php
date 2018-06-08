<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos</title>
	<link rel="stylesheet" href="assets/css/V_Presupuesto.css">
	<!-- Bootstrap core CSS-->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
	<!-- Custom styles for this template-->
	<link href="./assets/css/sb-admin.css" rel="stylesheet">
</head>
<body>
	<div class="maintitulo">
		<h1>PEDIDOS</h1>
	</div>
	<div class="tabla">
		<table border="1">
				<tr class="cabecera">
					<td>Código Pedido</td>
					<td>Producto</td>
					<td>Material</td>
					<td>Cantidad</td>
					<td>Detalles</td>
					<td>Fecha de emisión</td>
				</tr>
			<?php  
				/*foreach($this->modelo->Mostrar_Pedido() as $registro){
					echo "<tr class='contenidotable'><td>".$registro["cod_presupuesto"]. "</td>";
					echo "<td>".$registro["fecha_entrega"]. "</td>";
					echo "<td>".$registro["fecha_pago_parcial"]. "</td>";
					echo "<td>".$registro["precio_parcial"]. "</td>";
					echo "<td>".$registro["precio_total"]. "</td>";
					echo "<td>".$registro["cod_pedido"]. "</td>";
				}*/
			?>
			</table>
	</div>
	
	<div class="nuevopresupuesto">
		<form action="Vista/V_generar_presupuesto.php">
			<button type="submit" class="btnAgregar">Generar Nuevo Presupuesto</button>	
		</form>	
	</div>

</body>
</html>