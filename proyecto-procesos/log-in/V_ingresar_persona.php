<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crear Nuevo Usuario</title>
</head>
<body>
	<form action="index_persona.php" method="post">
		<label>DNI</label>
		<input type="text" name="DNI" autocomplete="off">
		<label>Ap. Paterno</label>
		<input type="text" name="ap_paterno" autocomplete="off">
		<label>Ap. Materno</label>
		<input type="text" name="ap_materno" autocomplete="off">
		<label>Nombre</label>
		<input type="text" name="nombre" autocomplete="off">
		<label>Direccion</label>
		<input type="text" name="direccion" autocomplete="off">
		<label>Email</label>
		<input type="text" name="email" autocomplete="off">
		<label>Password</label>
		<input type="password" name="contrasenia" autocomplete="off">

		<label>Telefono</label>
		<input type="text" name="telefono" autocomplete="off">
		<label>Estado</label>
		<select name="estado">
			<option value="1">Activo</option>
			<option value="0">Inactivo</option>
		</select>		
		<button type="submit" name="generar"><a href="index_persona.php"></a>GENERAR</button>	
		<button type="reset">LIMPIAR</button>
	</form>
</body>
</html>