<?php 
	//error_reporting(0); 
	class M_Material{
		private $db;
		private $materiales;

		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->materiales=array();
		}

		public function Agregar($descripcion,$precio){
			$sql="CALL SP_A_TABLA_MATERIAL('".$descripcion."',$precio)";
			$this->db->query($sql);
		//INSERT INTO material(descripcion, precio, estado) values(_descripcion, _precio, 1)
		}

		

	}
?>