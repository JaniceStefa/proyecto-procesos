<?php 
		//require_once("c_presupuesto.php");
		//$controlador=new C_Presupuesto();
		//$controlador->Admi();
		/*
		if(isset($_POST['generar']))
			$controlador->Agregar();
		if(isset($_POST['actualizar']))
			$controlador->Cambiar();
		if(isset($_POST['eliminar']))
			$controlador->Eliminar();
		*/
	session_start();
    require_once("../controlador/c_presupuesto.php");
    $controlador=new C_Presupuesto();
    
    if (isset($_POST['aceptar']))
    {
        //$controlador->AgregarPedido();
        echo '<script> window.location ="../vista/order_complete.php" </script>';

    }
    if (isset($_SESSION['user']))
    {
        if($_SESSION['privilegio']== 1){
            $controlador->Admi();
        }
            else{echo  '<script> window.location ="../vista/ficha_presupuesto.php" </script>';}
    }else{
        echo '<script> window.location ="../vista/ficha_presupuesto.php" </script>';
                }
?>