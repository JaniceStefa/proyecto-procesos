<?php
    session_start();
    require_once("../controlador/C_Persona.php");
    require_once("../controlador/c_pedido.php");
    $controlador=new C_Pedido();
    
    if (isset($_POST['aceptar']))
    {
        //$controlador->AgregarPedido();
        echo '<script> window.location ="../controlador/index_presupuesto.php" </script>';
        //echo '<script> window.location ="../vista/ficha_presupuesto.php" </script>';

    }
    if (isset($_SESSION['user']))
    {
        if($_SESSION['privilegio']== 1){
            $controlador->Admi();
        }
            else{echo  '<script> window.location ="../vista/V_ficha_pedido.php" </script>';}
    }else{
        echo '<script> window.location ="../vista/V_ficha_pedido.php" </script>';
                }
    /*
    if (isset(($_SESSION['user']) == 1)
    	$controlador->Admi();
    else
    	$controlador->RegistrarPedido();]*/
    //if(isset($_POST['aceptar']))
      //  $controlador->AgregarPedido();
    //$controlador->MostrarListaPedidos();
/*    if (isset($_SESSION['user']))
    {
        if($_SESSION['privilegio']== 1){
            $controlador->Admi();
        }
        else{
            $controlador->Index();
        }
    }
    else{echo  '<script> window.location ="../index.php" </script>';
    }*/
?>
