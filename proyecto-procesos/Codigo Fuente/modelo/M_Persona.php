<?php
    error_reporting(0);
	class M_Persona{
		//0 es un cliente
		//1 es administrador
		private $db;
		private $personas;

		public function __construct()
		{
			require_once("conectar_bd.php");
			$this->db=conectar::conexion();
			$this->personas=array();
		}
		public function Agregar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$contrasenia,$estado){
			$sql="CALL SP_A_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',$estado)";
			$sql1="CALL SP_A_TABLA_USUARIO('".$DNI."','".$contrasenia."',0,$estado)";
			
			$this->db->query($sql);
			$this->db->query($sql1);
			
		}
		public function Cambiar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado){
			
		$sql="CALL SP_C_TABLA_PERSONA('".$DNI."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$direccion."','".$email."','".$telefono."',$estado)";
			$this->db->query($sql);
			
		}

		public function Cambiar_Cuenta($DNI,$contrasenia,$cod_usuario){
			$sql="CALL SP_C_TABLA_USUARIO('".$DNI."','".$contrasenia."',0,1,'".$cod_usuario."')";
			$this->db->query($sql);
			//_DNI,_contrasenia,_tipo_acceso,_estado

		}
		public function Mostrar_Persona(){
			$sql=$this->db->query("CALL SP_M_TABLA_PERSONA");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->personas[]=$filas;
				}
				return $this->personas;
		}

		public function Verificar_Usuario($DNI){
			$sql="CALL SP_M_COD_USUARIO('".$DNI."')";
			$this->db->query($sql);
			return $this->$sql;
		}
		public function Eliminar($DNI,$estado){
		$sql="CALL SP_E_TABLA_PERSONA ('".$DNI."',$estado)";
		$this->db->query($sql);           }
	}
?>