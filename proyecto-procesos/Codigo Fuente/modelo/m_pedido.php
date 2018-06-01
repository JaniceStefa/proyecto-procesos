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
        
        $sql="CALL SP_A_TABLA_PEDIDO()";
        $this->db->query($sql);

        $sql1 = "SELECT cod_pedido FROM pedido ORDER BY cod_pedido DESC limit 1";
        //$codigo_pedido = $this->db->query($sql1);
        $this->db->query($sql);

        $this->Registrar_DetallePedido($codigo_pedido , $codProducto, $talla, $codMaterial, $cantidad, $fecha_requerida);
        return $codigo_pedido;
    }

    public function Mostrar_Pedido() {
        $sql=$this->db->query("CALL SP_M_TABLA_DETALLEPEDIDO()");
        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
    }
    /*public function Mostrar_Pedido_Admi(){

        foreach($this->modelo->Mostrar_Pedido() as $registro){

            //$sql = "SELECT descripcion FROM producto WHERE cod_pedido = ". $registro["cod_producto"];
            //$nombre_producto =$this->db->query($sql);

            $sql=$this->db->query"SELECT descripcion FROM producto WHERE cod_pedido = ". $registro["cod_producto"];);
            while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
                $this->pedidos[]=$filas;
            }
            $nombre_producto= $this->pedidos[]



            $sql1 = "SELECT descripcion FROM material WHERE cod_material = ". $registro["cod_material"];
            $nombre_material =$this->db->query($sql1);

            $sql2 = "SELECT apellido_paterno FROM persona WHERE DNI_cliente = ". $registro["DNI_cliente"];
            $nombre_cliente =$this->db->query($sql2);

        }*/
    
    public function Eliminar_Pedido($codigo_pedido){
        $sql="CALL SP_E_TABLA_PEDIDO('".$codigo_pedido."')";
        $this->db->query($sql);
    }

    public function Registrar_DetallePedido($codigo_pedido, $codProducto, $talla, $codMaterial, $cantidad, $fecha_requerida)
    {
        //$codigo_pedido = 1;
        $dni_cliente = "1234";    
        var_dump($codigo_pedido);
        $sql="CALL SP_A_TABLA_DETALLEPEDIDO('".$codigo_pedido."','".$codProducto."','".$talla."','" .$codMaterial. "','".$cantidad. "','" .$fecha_requerida. "','".$dni_cliente."')";

        $this->db->query($sql);
    }


}
?>