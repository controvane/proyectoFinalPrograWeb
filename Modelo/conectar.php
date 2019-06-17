<?php
	/**
	 * 
	 */
	class conectar
	{
		public static function conexion(){
			try{
				$conexion = new PDO('mysql:host = localhost; dbname=pruebadb','root','');
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$conexion->exec('SET CHARACTER SET UTF8');
			}
			catch(Exception $ex){
				die("Error: ".$ex->getMessage());
				echo "El error es: ".$ex->getLine();
			}
			return $conexion;
		}
	}
?>