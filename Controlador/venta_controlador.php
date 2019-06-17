<?php
require_once("Modelo/venta_modelo");//Archivo de ventas_modelo no se necesita distinto
$celu = new celular();
if(isset($_POST["venta"])){/*id boton submit de vender celular*/
	//saco los valores de la vista de ventas
	$celular = $_POST["id"];
	$cantidad = $_POST["cantidad"];
	$nit = $_POST["nitcli"];
	$apellido = $_POST["ape"];

	$celu->realizar_venta($celular,$cantidad,$nit,$apellido);
}
require_once("ventas_view.php");//vista de ventas
?>