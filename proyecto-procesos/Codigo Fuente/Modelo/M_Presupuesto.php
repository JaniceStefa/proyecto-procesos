<?php  
	class M_Presupuesto{
		private $db;
		private $presupuestos;

		public function __construct(){
			require_once("Modelo/Conectar.php");
			$this->db=Conectar::conexion();
			$this->presupuestos=array();
		}

		public function Agregar($cod_presupuesto,$precio_total,$fecha_entrega,$precio_parcial,$fecha_pago_parcial,$cod_pedido,$estado){
			$sql="CALL SP_A_TABLA_PRESUPUESTO('".$cod_presupuesto."',$precio_total,'".$fecha_entrega."',$precio_parcial,'".$fecha_pago_parcial."','".$cod_pedido."','".$estado."')";
			$this->db->query($sql);
			$this->db=null;

		}

		public function Cambiar($cod_presupuesto,$precio_total,$fecha_entrega,$precio_parcial,$fecha_pago_parcial,$cod_pedido){
			$sql="CALL SP_C_TABLA_PRESUPUESTO('".$cod_presupuesto."',$precio_total,'".$fecha_entrega."',$precio_parcial,'".$fecha_pago_parcial."','".$cod_pedido."')";
			$this->db->query($sql);
			$this->db=null;
		}


		public function Mostrar(){

			$sql=$this->db->query("CALL SP_M_TABLA_PRESUPUESTO");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->presupuestos[]=$filas;
			}

			return $this->presupuestos;
		}

		public function Eliminar($cod_presupuesto,$cod_pedido,$estado){
			$sql="CALL SP_E_TABLA_PRESUPUESTO('".$cod_presupuesto."','".$cod_pedido."','".$estado."')";
			$this->db->query($sql);
		}

	}
?>