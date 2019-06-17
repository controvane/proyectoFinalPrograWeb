<?php
require_once("Modelo/celular_modelo");//Archivo de ventas_modelo
$celu = new celular();
if(isset($_POST["nuevo"])){/*id boton submit de agregar celular*/
	//saco los valores de la vista de ventas
	$marca = $_POST["marca"];
	$empresa = $_POST["empresa"];
	$cantidad = $_POST["cantidad"];
	$precio = $_POST["precio"];

	$celu->nuevo_celular($marca,$empresa,$cantidad,$precio);
}
require_once("celular_view.php");//vista de celular
?>