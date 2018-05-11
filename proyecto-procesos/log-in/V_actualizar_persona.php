<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Datos</title>
</head>
<body>
	<form action="index_persona.php" method="post">

	<label>Código Presupuesto</label>
	<input type="text" name ="DNI" value="<?php echo $DNI=$_GET['d']; ?>" autocomplete="off">		
	<label>Ap. Paterno</label>
	<input type="text" name ="ap_paterno" value="<?php echo $ap_paterno=$_GET['ap']; ?>" autocomplete="off">
	<label>Ap. Materno</label>
	<input type="text" name ="ap_materno" value="<?php echo $ap_materno=$_GET['am']; ?>" autocomplete="off">
	<label>Nombre</label>
	<input type="text" name ="nombre" value="<?php echo $nombre=$_GET['nom']; ?>" autocomplete="off">
	<label>Direccion</label>
	<input type="text" name ="direccion" value="<?php echo $direccion=$_GET['dir']; ?>" autocomplete="off">
	<label>E-mail</label>
	<input type="text" name ="email" value="<?php echo $email=$_GET['em']; ?>" autocomplete="off">
	<label >Password</label>
	<input type="password" name= "contrasenia" value="<?php echo $contrasenia=$_GET['pw'];?>"
	<label>telefono</label>
	<input type="text" name ="telefono" value="<?php echo $telefono=$_GET['tel']; ?>" autocomplete="off">
	<select name="estado" >
		<option value="1">Activo</option>
		<option value="0">Inactivo</option>
	</select>
	<button type="submit" name="actualizar">Guardar Cambios</button>
	<button type="reset">limpiar</button>
	

	</form>
	
</body>
</html>