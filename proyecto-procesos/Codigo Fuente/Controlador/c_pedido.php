<?php
    class C_Pedido{

        private $modelo;
        public function Index()
        {
            require_once("../modelo/m_pedido.php");
            $this->modelo=new M_Pedido();
            require_once("../vista/v_ficha_pedido.php");
        }
        public function Admi()
        {
            require_once("../modelo/m_pedido.php");
            $this->modelo=new M_Pedido();
            require_once("../vista/VA_Pedidos.php");
        }
        public function AgregarPedido()
        {
            require_once("../modelo/m_pedido.php");
            $this->modelo=new M_Pedido();
            require_once("../vista/v_ficha_pedido.php");

            $Producto = $_POST['producto'];
            $Talla = $_POST['tallas'];
            $Material = $_POST['material'];
            $Cantidad=$_POST['cantidad'];
            $FechaRequerida = $_POST['fecharequerida'];

            $this->modelo->Registrar_Pedido($Producto, $Talla, $Material, $Cantidad, $FechaRequerida);
        }
        public function MostrarListaPedidos()
        {
            require_once("../modelo/m_pedido.php");
            $this->modelo=new M_Pedido();
            require_once("../vista/v_lista_pedidos.php");
        }
    }  

?>