<?php
    error_reporting(0);
	class M_Persona{
		//0 es un cliente
		//1 es administrador
		private $db;
		private $personas;

		public function __construct()
		{
			require_once("conectar.php");
			$this->db=conectar::conexion();
			$this->personas=array();
		}
		public function Agregar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado){
			$sql="CALL SP_A_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',$estado)";
			//_DNI,_contrasenia,_tipo_acceso,_estado
			$this->db->query($sql);
			$this->db=null;
		}
		public function Cambiar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado){
			
		$sql="CALL SP_C_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',$estado)";
			$this->db->query($sql);
			
			$this->db=null;
		}
		public function Mostrar(){
			$sql=$this->db->query("CALL SP_M_TABLA_PERSONA");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
				}
				return $this->personas;
		}

		public function Eliminar($DNI,$estado){
		$sql="CALL SP_E_TABLA_PERSONA ('".$DNI."',$estado)";
		$this->db->query($sql);           }
	}
?>