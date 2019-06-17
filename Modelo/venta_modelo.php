<?php
require("conectar.php");
class venta{
	private $db;
	private $venta;

	public function __construct(){
		require_once("Modelo/conectar.php");//conexion a la base de datos
		$this->db = Conectar::conexion();
		$this->venta = array();//para listar en una tabla si es necesario		
	}
	public function datos_venta(){//funcion para listar una tabla
		$consulta = $this->db->query("select * from ventas");
		while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
			$this->venta[] = $filas;
		}
		return $this->venta;
	}
	public function datos_venta_fecha($fecha){//funcion para listar una tabla por fecha
		$sql = "select * from celulare where fecha = :fecha";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":fecha" => $fecha));
		while($filas = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->venta[] = $filas;
		}
		return $this->venta;
	}
	public function datos_venta_nit($nit){//funcion para listar una tabla por fecha
		$sql = "select * from celulare where nit = :nit";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":nit" => $nit));
		while($filas = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->venta[] = $filas;
		}
		return $this->venta;
	}
	public function datos_venta_apellido($ape){//funcion para listar una tabla por fecha
		$sql = "select * from celulare where ape = :ape";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":ape" => $ape));
		while($filas = $resultado->fetch(PDO::FETCH_ASSOC)){
			$this->venta[] = $filas;
		}
		return $this->venta;
	}
	public function realizar_venta($celular/*id celular*/, $cantidad, $nit_cli, $ape_cli){
		$sql = "INSERT INTO ventas(celular, cantidad, nit, apellido) values(:celu, :cant, :nit, :ape)";
		$resultado = $this->db->prepare($sql);
		$resultado->execute(array(":celu"=>$celular, ":cant"=>$cantidad, ":nit"=>$nit_cli, ":ape"=>$ape_cli));
	}
}
?>