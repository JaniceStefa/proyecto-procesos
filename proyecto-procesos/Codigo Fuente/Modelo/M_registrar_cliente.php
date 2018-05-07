<?php

class M_registrar_cliente {
    
    private $cliente;
    private $db;

    public function __construct(){  
      //  include "conexion.php";
        $this->cliente=array();
        $this->db=new PDO('mysql:host=localhost;dbname=proyectoprocesos',"root","");
    }
    private function set_names()
    {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function InsertarCliente($dni,$appaterno,$apmaterno,$nombres,$direccion,$telefono,$email,$contraseña,$tipoacceso,$estado){
        self::set_names();
        $sql="CALL SP_A_Tabla_Usuario('".$dni."','".$appaterno."','".$apmaterno."','".$nombres."','".$direccion."','".$telefono."','".$email."','".$contraseña."',$tipoacceso,$estado)";
        $this->db->query($sql);
    }
    public function MostrarCliente() {
        self::set_names();
        $sql = "CALL SP_M_Tabla_Usuario";
        foreach ($this->db->query($sql) as $res){
            $this->cliente[] = $res;
        }
        return $this->cliente;
    }
}
?>
