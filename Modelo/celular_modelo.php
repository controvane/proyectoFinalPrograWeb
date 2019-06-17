<?php
require("conectar.php");
class celular{
	private $db;
	private $celular;

	public function __construct(){
		require_once("Modelo/conectar.php");//conexion a la base de datos
		$this->db = Conectar::conexion();
		$this->celular = array();//para listar en una tabla si es necesario		
	}
	public function nuevo_celular($marca, $empresa, $cantidad, $precio){//campos de la base de datos puede modificarse, funcion para agregar un nuevo celular	
		$sql = "INSERT INTO celulares/*<--- nombre de la tabla*/ (/*Campo autoincrement id*/marca, empresa, cantidad, precio) VALUES (:marca, :empresa, :cantidad, :precio)";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":marca"=>$marca, ":empresa"=>$empresa, ":cantidad"=>$cantidad, ":precio"=>$precio));
	}
	public function datos_celular(){//funcion para listar una tabla
		$consulta = $this->db->query("select * from celulares");
		while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
			$this->celular[] = $filas;
		}
		return $this->celular;
	}
}
?>