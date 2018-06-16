<?php
    //session_start();
    require_once("../controlador/c_pedido_presupuesto.php");

    $controlador = new C_Pedido_Presupuesto();
    $esto = $controlador ->GenerarPresupuesto();

    require_once("../vista/v_ficha_presupuesto.php");
    //$dato = $controlador ->Presupuesto();
    
?>