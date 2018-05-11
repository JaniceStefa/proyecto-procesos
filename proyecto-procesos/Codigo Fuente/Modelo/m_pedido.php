<?php
//error_reporting(0);
class M_registrar_pedido{

    private $pedido;
    private $db;
 
    public function __construct()
    {
        //require_once('conexion.php');
        $this->pedido = array();
        $this->db = new PDO('mysql:host=localhost;dbname=databasee', "root", "");
    }
 
    private function set_names()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }
 
    public function RegistrarPedido($codProducto, $codMaterial, $cantidad, $fecha_requerida, $talla)
    {
        
        self::set_names();
    
        //$fecha_emision = date('d-m-Y'); // fecha de emision del pedido
        //$dni_cliente = ClientePedido()

        $sql="CALL SP_A_TABLA_PEDIDO()";
        $this->db->query($sql);

        $sql1 = "SELECT * FROM pedido ORDER BY cod_pedido DESC limit 1";
        $codigo_pedido = $this->db->query($sql1);
        require_once("../vista/mostrar.php");
        
        //RegistrarDetallePedido($codProducto, $codMaterial, $cantidad,)
        // $sql2="INSERT INTO detallepedido(cod_pedido,cod_producto, talla, cod_material, cantidad, fecha_requerida, dni_cliente) VALUES('".$codigo_pedido."','".$codProducto."','". $talla."','". $codMaterial."','".$cantidad. "','". $fecha_requerida."','". $dni_cliente ."')";
        // Cerrar conexión a la Base de Datos 
        // mysql_close($conexion); 
    }
    public function MostrarPedido() {
        self::set_names();
        $sql = "CALL SP_M_TABLA_PEDIDO()";
        foreach ($this->db->query($sql) as $res){
            $this->pedidos[] = $res;
        }
        return $this->pedidos;
    }
    /*public function ObtenerCodProducto($codigo){
        self::set_names();
        $sql = "SELECT cod_producto FROM producto WHERE cod_producto = $codigo";
        $codigo_producto = $this->db->query($sql2);        

        return $codigo_producto;
    }*/
    public function RegistrarDetallePedido()
    {
        $dni_cliente = "1234";    
        $sql2="CALL SP_A_TABLA_DETALLEPEDIDO($codigo_pedido, $codProducto, $talla, $codMaterial, $cantidad, $fecha_requerida, $dni_cliente)";

        $this->db->query($sql2);
    }
}
?>