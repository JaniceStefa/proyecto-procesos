<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Catalogo de Producto</title>
	<link rel="stylesheet" href="../assets/css/v_visualizar_producto.css">
</head>
<body>
	<div class="maintitulo">
		<h1>PRODUCTOS</h1>
	</div>
	<div class="tabla">
		<table border="1">
				<tr class="cabecera">
					<td>Código Producto</td>
					<td>Descripción</td>
					<td>Imagen</td>
				</tr>
			<?php  
				foreach($this->modelo->Mostrar_Producto() as $registro){
					echo "<tr class='contenidotable'><td>".$registro["cod_producto"]. "</td>";
					echo "<td>".$registro["descripcion"]. "</td>";
					echo "<td>".$registro["imagen"]. "</td>";
				}
			?>
			</table>
	</div>
</body>
</html>
