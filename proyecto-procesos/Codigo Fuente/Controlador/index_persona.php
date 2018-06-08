<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Persona</title>
</head>
<body>
		<?php
		session_start();
		require_once("../controlador/c_persona.php");

		$controlador=new C_Persona();
			//$controlador->Index();
		if(isset($_POST['generar']))
		{
			$controlador->Agregar();
			echo  '<script> window.location ="../vista/V_login.php" </script>';	
		}
		if(isset($_POST['login']))
		{
			$controlador->ValidarUsuario();
		}
		if(isset($_POST['v_codigo_usuario']))
		{
			$controlador-> Verificar_Usuario();
			echo '<script> window.location="../vista/V_actualizar_usuario.php"</script>';
		}
		if(isset($_POST['cambiar_password']))
		{
			$controlador-> Cambiar_Cuenta();
			echo '<script> window.location=""</script>';
		}
		if (isset($_SESSION['user']))
		{
			if($_SESSION['privilegio']== 1){
    			$controlador->Admi();
    		}
    		else{echo  '<script> window.location ="../index.php" </script>';}
    				
    		if(isset($_POST['actualizar']))
				$controlador->Cambiar();
			if(isset($_POST['eliminar']))
				$controlador->Eliminar();
		}else{
			echo '<script> window.location ="../vista/V_login.php" </script>';
                }
              
		?>
	
</body>
</html>