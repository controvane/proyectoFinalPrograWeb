<?php
require("conectar.php");
class usuario{
	private $db;
	private $usuario;

	public function __construct(){
		require_once("Modelo/conectar.php");//conexion a la base de datos
		$this->db = Conectar::conexion();
		$this->celular = array();//para listar en una tabla si es necesario		
	}
	public function nuevo_usuario($nombre,$pass){//campos de la base de datos puede modificarse, funcion para agregar un nuevo celular	
		$sql = "INSERT INTO usuario/*<--- nombre de la tabla*/ (/*Campo autoincrement id*/ nombre, pass) VALUES (:nombre, :pass)";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array( ":nombre"=>$nombre, ":pass"=>$pass));
	}
	public function datos_usuario($nombre.$pass){//funcion para listar una tabla
		$sql = "select * from usuario where nombre = :nombre && pass = :pass";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":nombre" => $nombre, ":pass" => $pass));
		while($filas = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->usuario[] = $filas;
		}
		return $this->usuario;
	}
}
?>