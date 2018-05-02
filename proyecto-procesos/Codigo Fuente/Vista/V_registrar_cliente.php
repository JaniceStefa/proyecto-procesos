<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="../Controlador/insertar_cliente.php" method="post">
		<h1>Registro Cliente</h1>
		<p>DNI:<input type="text" name="dni"></p>
		<p>Apellido Paterno:<input type="text" name="apPaterno"></p>
		<p>Apellido Materno:<input type="text" name="apMaterno"></p>
		<p>Nombres:<input type="text" name="nombres"></p>
		<p>Dirección:<input type="text" name="direccion"></p>
		<p>Telefono:<input type="text" name="telefono"></p>
		<p>Email:<input type="text" name="email"></p>
		<p>Contraseña:<input type="text" name="contraseña"></p>
		<label>Tipo Acceso:</label>
		<select name="tipoacceso">
			<option value="c">C</option>
			<option value="a">A</option>
		</select>
		<label>Estado:</label>
		<select name="estado">
			<option value="ac">A</option>
			<option value="inac">I</option>
		</select>
		<br>
		<input type="submit" value="Registrarse">
	</form>
	<table border="1">
		<tr>
			<td>DNI</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Nombres</td>
			<td>Dirección</td>
			<td>Telefono</td>
			<td>Email</td>
			<td>Contraseña</td>
			<td>Tipo Acceso</td>
			<td>Estado</td>
		</tr>
        <?php
       		include("../Controlador/mostrar_cliente.php");
            for($i=0;$i<count($datos);$i++)
            {
                ?>
                    <tr>
                        <td><?php echo $datos[$i]["DNI"]; ?></td>
                        <td><?php echo $datos[$i]["ApellidoPaterno"]; ?></td>
                        <td><?php echo $datos[$i]["ApellidoMaterno"]; ?></td>
                        <td><?php echo $datos[$i]["Nombres"]; ?></td>
                        <td><?php echo $datos[$i]["Direccion"]; ?></td>
                        <td><?php echo $datos[$i]["Telefono"]; ?></td>
						<td><?php echo $datos[$i]["Email"]; ?></td>
                        <td><?php echo $datos[$i]["Contraseña"]; ?></td>
                        <td><?php echo $datos[$i]["Tipo_acceso"]; ?></td>
                        <td><?php echo $datos[$i]["Estado"]; ?></td>
                    </tr>
                    <?php
            }
        ?>
	</table>
</body>
</html>