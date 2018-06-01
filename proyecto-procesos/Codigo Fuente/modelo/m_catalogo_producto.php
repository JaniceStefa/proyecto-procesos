<?php 
	error_reporting(0); 
	class M_Catalago_Producto{
		private $db;
		private $productos;

		public function __construct(){
			require_once("modelo/conectar_bd.php")
			$this->db=Conectar::conexion();
			$this->productos=array();
		}

		public function Agregar_Producto($descripción,$imagen){
			$sql="CALL SP_A_TABLA_PRODUCTO('".$descripción."','".$imagen ."')";
			$this->db->query($sql);
		}

		public function Cambiar_Producto($descripción,$imagen){
			$sql="CALL SP_C_TABLA_PRODUCTO('".$descripción."','".$imagen ."')";
			$this->db->query($sql);
			//$this->db=null;
		}


		public function Mostrar_Producto(){

			$sql=$this->db->query("CALL SP_M_TABLA_PRODUCTO");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->productos[]=$filas;
			}
			return $this->productos;
		}

		public function Eliminar_Producto($cod_producto){
			$sql="CALL SP_E_TABLA_PRESUPUESTO('".$cod_producto."')";
			$this->db->query($sql);
		}

	}
?>