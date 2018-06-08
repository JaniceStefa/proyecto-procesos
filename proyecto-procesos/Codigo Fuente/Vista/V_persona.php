<?php 
		if (isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Persona</title>
	<link rel="stylesheet" href="index_persona.php">>
</head>
<body>
 	<form action="">
 		<button type='submit' name='agregar'><a href="V_ingresar_persona.php">Crear</a></button>
 	</form>
	<table border="1">
		<tr>
			<td>DNI</td>
			<td>Ap. Paterno</td>
			<td>Ap. Materno</td>
			<td>Nombre</td>
			<td>Direccion</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Estado</td>
			
		</tr>
<?php  
		//<td>Eliminar</td>
		foreach($this->modelo->Mostrar() as $registro){
			echo "<tr><td>".$registro["DNI"]."</td>";			
			echo "<td>".$registro["ap_paterno"]."</td>";
			echo "<td>".$registro["ap_materno"]."</td>";
			echo "<td>".$registro["nombre"]."</td>";
			echo "<td>".$registro["direccion"]."</td>";
			echo "<td>".$registro["email"]."</td>";
			echo "<td>".$registro["telefono"]."</td>";
			echo "<td>".$registro["estado"]."</td>";
		
			echo "<td><button type='submit' name='actualizar'><a href='V_actualizar_persona.php?d=".$registro['DNI']." &&ap=".$registro['ap_paterno']." &&am=".$registro['ap_materno']." &&nom=".$registro['nombre']." &&dir=".$registro['direccion']." &&em=".$registro['email']." &&tel=".$registro['telefono']." &&st=".$registro['estado']."'>Actualizar</a></button></td>";

			//echo "<td><button type='reset' name='eliminar' id='delete'>Eliminar</button></td>";	
		}
	?>
	<a href="../modelo/logout.php"><button>Salir</button></a>
	</table>

</body>
<?php } ?>
