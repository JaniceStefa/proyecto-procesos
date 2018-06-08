<?php
    class C_Pedido_Presupuesto{

        private $modelo;
        public function GenerarPresupuesto() {
            require_once("../modelo/m_consultas.php");
            $this->modelo=new M_Consultas();
            
            $Producto = $_POST['producto'];
            $Talla = $_POST['tallas'];
            $Material = $_POST['material'];
            $cantidad=$_POST['cantidad'];
            $FechaRequerida = $_POST['fecharequerida'];

            // cantidada de productos fabricados en un dia 
            $cant_dia = 20;

            //calculo para determinar fecha de entrega
            $dias_prod = round($cantidad/$cant_dia);
            $Fecha_Entrega = strtotime($FechaRequerida. "+" .$dias_prod. "days"); 

        //calculo costos
            // calculo de costos directos
            foreach ($this->modelo->ConsultaPrecio($Producto, $Material) as $registro) {
                $precio_mat = $registro["precio_mat"];
                $precio_prod = $registro["precio_prod"];
            }
            $otros = 0.75;// distintos a tela 
            $precio_talla = 0;  
            switch ($Talla) {
                case 'S': $precio_talla = 2; break;
                case 'M': $precio_talla = 5; break;
                case 'L': $precio_talla = 7; break;
                case 'XL': $precio_talla = 10; break;
            }
           
            $cost_material = $precio_mat + $precio_talla + $otros;

            // costos de mano de obra
            $costo_mano_diario = 10;
            $cost_mano = $dias_prod * $costo_mano_diario;

            $costo_directo = $cost_material + $cost_mano + $precio_prod;
            
             //calculo de costos indirectos
            $costo_indirecto = round(0.05*$costo_directo,2);

            //costo unitario 
            $costo_unitario = $costo_directo + $costo_indirecto;

            //costo total 
            $costo_total = $costo_unitario * $cantidad;

            //costo total 
            $costo_parcial = 0.25 * $costo_total;

            require_once("../vista/v_ficha_pedido-otro.php");
            echo "material: ";echo $precio_mat;
            echo " dias: ";echo $dias_prod;
            echo " fecha ..: ";echo $Fecha_Entrega;
            echo " indirectos: "; echo $costo_indirecto;
            echo " producto: "; echo $precio_prod;
            echo " talla: "; echo $precio_talla;
            echo " mano obra: "; echo $cost_mano;
            echo " costo material: "; echo $cost_material;
            echo " costo directo: "; echo $costo_directo;
            echo " costo unitario: "; echo $costo_unitario;
            echo " costo total: ";echo $costo_total;
            echo " costo parcial: ";echo $costo_parcial;
            /*$this->modelo->Agregar($cod_presupuesto,$precio_total,$fecha_entrega,$precio_parcial,$fecha_pago_parcial,$cod_pedido);
            header('Location: index_Presupuesto.php');
            header_remove('Location');*/
        }
    }  

?>