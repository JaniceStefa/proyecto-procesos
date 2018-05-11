<?php
	class C_Persona{

		private $modelo;
		public function Index()
		{
			require_once("M_Persona.php");
			$this->modelo=new M_Persona();
			require_once("V_Persona.php");
		}
	
	public function Agregar(){
		require_once("M_Persona.php");
		$this->modelo=new M_Persona();
		
		$DNI=$_POST['DNI'];
		$ap_paterno= $_POST['ap_paterno'];
		$ap_materno=$_POST['ap_materno'];
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$estado=$_POST['estado'];
		$this->modelo->Agregar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado);
	
		header('Location: index_Presupuesto.php');
		header_remove('Location');
		//header('Location: index_persona.php');
	}
	public function Cambiar(){
			require_once("M_Persona.php");
			$this->modelo=new M_Persona();
			
			$DNI=$_POST['DNI'];
			$ap_paterno= $_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$estado=$_POST['estado'];
			header('Location: index_Presupuesto.php');
			header_remove('Location');
			$this->modelo->Cambiar($DNI,$ap_paterno,$ap_materno,$nombre,$direccion,$email,$telefono,$estado);
		    
		}

		public function Eliminar(){
			require_once("M_Persona.php");
			$this->modelo=new M_Persona();
			$DNI=$_POST['DNI'];
			$estado=$_POST['estado'];
			$this->modelo->Eliminar($DNI,$Estado);
		}}
?>