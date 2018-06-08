
<?php
	class C_Material{

		private $modelo;
		public function Index()
		{
			require_once("../modelo/M_material.php");
			$this->modelo=new M_Material();
			require_once("../vista/catalogo_material.html");
		}

		public function Admi()
		{
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();
			require_once("../vista/VA_Materiales.php");

		}

		public function Catalogo_Material()
		{
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();
			require_once("../vista/VA_CatalogoMateriales.php");
		}
		public function Agregar(){
			require_once("../modelo/m_material.php");
			$this->modelo=new M_Material();

			$Descripcion=$_POST['descripcion'];
			$Precio = $_POST['precio'];
			$this->modelo->Agregar($Descripcion,$Precio);
		}

		  
	}
?>