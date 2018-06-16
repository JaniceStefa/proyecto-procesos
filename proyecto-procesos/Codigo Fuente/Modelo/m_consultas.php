<?php 
class M_Consultas {
    private $precios;
    private $db;
    public function __construct()
    {
        require_once("conectar_bd.php");
        $this->db=Conectar::conexion();
        $this->precios=array();
    }
    public function ConsultaPrecio($Producto, $Material) 
    {  
        $sql = $this->db->query("CALL SP_CONSULTA_PRECIO($Producto, $Material)");
        //$sql = $this->db->query("SELECT precio_mat, precio_prod from material inner join producto WHERE cod_material = 2 && cod_producto = 3");
        //$this->db->query($sql);

        while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
            $this->precios[]=$filas;
        }
        return $this->precios;
    } 
}
?>