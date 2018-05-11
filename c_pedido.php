<?php 
    
    // Llamada a la vista
    require_once('../vista/v_ficha_pedido.php');
    // Llamada al modelo
    //require_once('../modelo/m_prueba_pedido.php');
        $producto = $_POST["opcion_producto"];
        $talla = $_POST["tallas"];
        $optionMaterial = $_POST["opcion_material"];
        $cantidad=$_POST["cantidad"];
        $fecha_requerida = date('d-m-Y', strtotime($_POST["fechaentrega"]));
        
       /* if(isset($_POST["prod"]))
        {
            $productos = $_POST['prod'];
            for($i = 0; $i<4 ; $i++)
            {
                //$prod1 = $productos[$i];
                //echo $prod1;
            } 
        }*/
        //if ((isset($talla)) && ($talla != '') && (isset($optionMaterial)) && ($optionMaterial != '') && (isset($cantidad)) && ($cantidad != 0) && (isset($fecha_requerida)) && ($fecha_requerida != '') ) {
        if (isset($_POST["Aceptar"]))
        {
            require_once ('../modelo/m_prueba_pedido.php');
            $nuevo = new M_registrar_pedido();
            $asd = $nuevo->RegistrarPedido($producto, $talla, $optionMaterial, $cantidad, $fecha_requerida);
        }
        
        //$pedido = new M_registrar_pedido();
        //$pedido->RegistrarPedido($productos, $talla, $optionMaterial, $cantidad, $fecha_requerida);   
        /*
        <?php 
    
    // Llamada a la vista
    require_once('../vista/v_ficha_pedido.php');
    // Llamada al modelo
    require_once('../modelo/m_prueba_pedido.php');
    $pedido = new M_registrar_pedido();

    
        $talla = $_POST["tallas"];
        $optionMaterial = $_POST["opcion_material"];
        $cantidad=$_POST['cantidad'];
        $fecha_requerida = date('d-m-Y', strtotime($_POST["fechaentrega"]));
        
        //$pedido->RegistrarPedido();   

        if(isset($_POST["prod"]))
        {
            $productos = $_POST['prod'];
            for($i = 0; $i<4 ; $i++)
            {
                $prod1 = $productos[$i];
                echo $prod1;
                // $pedido->RegistrarDetallePedido($prod1, $talla, $optionMaterial, $cantidad, $fecha_requerida);   
            } 
        }
        $productos = NULL;
        //$pedido = new M_registrar_pedido();
        $pedido->RegistrarPedido($productos, $talla, $optionMaterial, $cantidad, $fecha_requerida); 

?>*/
?>
