<?php
    session_start();
    require_once("../controlador/c_pedido_presupuesto.php");

    $controlador=new C_Pedido_Presupuesto();
    $controlador ->GenerarPresupuesto();
    
    
?>