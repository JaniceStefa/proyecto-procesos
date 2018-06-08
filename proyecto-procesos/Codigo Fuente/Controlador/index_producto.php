<?php  
    session_start();
    require_once("../controlador/C_Persona.php");
    require_once("../controlador/c_producto.php");
    $controlador=new c_producto();
    $controlador->Admi();
    if(isset($_POST['agregar']))
    {
    	$controlador->Agregar();
    }
    if(isset($_POST['catalogo']))
    	 $controlador->Catalogo_Producto();
?>