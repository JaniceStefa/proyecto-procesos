
<?php
	class C_Presupuesto{

		private $modelo;
		public function Index()
		{
			require_once("Modelo/M_Presupuesto.php");
			$this->modelo=new M_Presupuesto();
			require_once("Vista/V_Presupuesto.php");
		}


		public function Agregar(){
			require_once("Modelo/M_Presupuesto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioParcial=$_POST['precioparcial'];
			$PrecioTotal=$_POST['preciototal'];
			$CodPedido=$_POST['codigopedido'];
			$Estado=$_POST['estado'];
			$this->modelo->Agregar($CodPresupuesto,$PrecioTotal,$FechaEntrega,$PrecioParcial,$FechaPagoParcial,$CodPedido,$Estado);
			header('Location: index_Presupuesto.php');
		}

		public function Cambiar(){
			require_once("Modelo/M_Presupuesto.php");
			$this->modelo=new M_Presupuesto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioParcial=$_POST['precioparcial'];
			$PrecioTotal=$_POST['preciototal'];
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