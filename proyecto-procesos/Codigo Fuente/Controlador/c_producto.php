
<?php
	class C_Producto{

		private $modelo;
		public function Index()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/catalogo_producto.html");
		}

		public function Admi()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_Productos.php");

		}

		public function Catalogo_Producto()
		{
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();
			require_once("../vista/VA_CatalogoProductos.php");
		}
		public function Agregar(){
			require_once("../modelo/m_producto.php");
			$this->modelo=new M_Producto();

			$nombre=$_FILES['imagen']['name'];
			$tipo=$_FILES['imagen']['type'];
			$tamanio=$_FILES['imagen']['size'];

			$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/Proyecto/assets/imagenes/';
			move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre);

			$Descripcion=$_POST['descripcion'];
			$this->modelo->Agregar($Descripcion,$nombre);
		}

		public function Cambiar(){
			require_once("../modelo/m_catalogo_producto.php");
			$this->modelo=new M_Catalago_Producto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$FechaEntrega=$_POST['fechaentrega'];
			$FechaPagoParcial=$_POST['fechapagoparcial'];
			$PrecioTotal=$_POST['preciototal'];
			$PrecioParcial=$PrecioTotal*0.4;
			$CodPedido=$_POST['codigopedido'];
			$this->modelo->Cambiar($CodPresupuesto,$PrecioTotal,$FechaEntrega,$PrecioParcial,$FechaPagoParcial,$CodPedido);
		}


		public function Eliminar_Producto(){
			require_once("../modelo/m_catalogo_producto.php");
			$this->modelo=new M_Catalago_Producto();
			$CodPresupuesto=$_POST['codpresupuesto'];
			$CodPedido=$_POST['codigopedido'];
			$Estado=$_POST['estado'];
			$this->modelo->Eliminar($CodPresupuesto,$CodPedido,$Estado);
		}

	}  

?>