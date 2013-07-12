<?php

// --- obtenemos los datos que provienen del metodo post del formulario

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero'];
// haremos una verificacion para saber si no hay ningun campo vacio
if($nombre!="" && $apellido!="" && $numero!=""){
	// si no lo hay procedemos
	include "conexion.php";
	$con = new Conexion();
	$consulta = "insert into contactos (nombre,apellido,numero) value (\"".$nombre."\",\"".$apellido."\",\"".$numero."\")";
	if($con->conexion->query($consulta)){
		print "<script>window.location='index.php';</script>";
	}else {
		print "error";
	}
}else {
	print "datos vacios";
	print " <br>reintentar : <a href='index.php'>aqui</a>";
	}
?>
