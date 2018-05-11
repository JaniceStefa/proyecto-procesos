<?php  

	class conectar{
		public static function conexion(){
			try{
				$conexion=new PDO('mysql:host=localhost; dbname=db_garras','root','');
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$conexion->exec("SET CHARACTER SET UTF8");
			}catch(Exception $e)
			{
				die("Error".$e->getMessage());
			}

			return $conexion;
		}
	}
?>