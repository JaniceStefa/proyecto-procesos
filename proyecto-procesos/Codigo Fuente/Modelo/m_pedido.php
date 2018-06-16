<?php
//error_reporting(0);
class M_Pedido{
    private $pedido;
    private $db;
    
    public function __construct()
    {
        require_once("conectar_bd.php");
        $this->db=Conectar::conexion();
        $this->pedidos=array();
    }

    public function Registrar_Pedido($codProducto, $talla, $codMaterial, $cantidad, $fecha_requerida)    {
        
        //$sql="CALL SP_A_TABLA_PEDIDO()";
        //$resultado = $this->db->query($sql);
        $dni_cliente = $_SESSION['user'];
        $sql="CALL SP_A_TABLA_DETALLEPEDIDO('".$codProducto."','".$talla."','" .$codMaterial. "','".$cantidad. "','" .$fecha_requerida. "','".$dni_cliente."')";
        $this->db->query($sql);     
    }

    public function Mostrar_Pedido() {
        $sql=$this->db->query("CALL SP_M_TABLA_DETALLEPEDIDO()");
        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
    }
    public function Eliminar_Pedido($codigo_pedido){
        $sql="CALL SP_E_TABLA_PEDIDO('".$codigo_pedido."')";
        $this->db->query($sql);
    }
}
?>