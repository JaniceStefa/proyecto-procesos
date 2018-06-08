<?php
    require_once("c_persona.php");
    $controlador=new C_Persona();
    $controlador->AdmiCliente();
    /*
    if (isset(($_SESSION['user']) == 1)
    	$controlador->Admi();
    else
    	$controlador->RegistrarPedido();]*/
    //if(isset($_POST['aceptar']))
      //  $controlador->AgregarPedido();
    //$controlador->MostrarListaPedidos();
?>
