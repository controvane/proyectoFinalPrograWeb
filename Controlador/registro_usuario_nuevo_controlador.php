<?php
require_once("Modelo/usuario_modelo");//Archivo de ventas_modelo no se necesita distinto
$usuario = new usuario();
if(isset($_POST["nuevoUsuario"])){/*id boton submit de vender celular*/
	//saco los valores de la vista de ventas
	$nombre = $_POST["nombre"];
	$pass = $_POST["pass"];
	$usuario->nuevo_usuario($nombre,$pass);
	$usuario->datos_usuario($nombre,$pass);
	$i = 0;
	foreach ($usuario as $elemento) {
		$i++;
	}
	if($i<0){
		$_SESSION["nombre"] = $usuario["nombre"];
		header("location:index.html");
	}
	else{
		echo "no se encontro el usuario";
	}
}
require_once("registo_usuario_nuevo_view.php");//vista de ventas
?>