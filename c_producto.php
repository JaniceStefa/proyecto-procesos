
<?php
	class C_Producto{

		private $modelo;
		public function Index()
		{
			require_once("../modelo/m_catalogo_proucto.php");
			$this->modelo=new M_Presupuesto();
			require_once("../vista/v_visualizar_producto.php");
		}

		public function Agregar(){
			require_once("../modelo/m_catalogo_proucto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioTotal=$_POST['preciototal'];
			$PrecioParcial=$PrecioTotal*0.4;
			$CodPedido=$_POST['codigopedido'];
			$Estado=$_POST['estado'];
			$this->modelo->Agregar($CodPresupuesto,$PrecioTotal,$FechaEntrega,$PrecioParcial,$FechaPagoParcial,$CodPedido,$Estado);
			header('Location: index_Presupuesto.php');
			header_remove('Location');
		}

		public function Cambiar(){
			require_once("../modelo/m_catalogo_proucto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioTotal=$_POST['preciototal'];
			$PrecioParcial=$PrecioTotal*0.4;
			$CodPedido=$_POST['codigopedido'];
			$this->modelo->Cambiar($CodPresupuesto,$PrecioTotal,$FechaEntrega,$PrecioParcial,$FechaPagoParcial,$CodPedido);
		}


		public function Eliminar(){
			require_once("Modelo/M_Presupuesto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$CodPedido=$_POST['codigopedido'];
			$Estado=$_POST['estado'];
			$this->modelo->Eliminar($CodPresupuesto,$CodPedido,$Estado);
		}

	}  

?>