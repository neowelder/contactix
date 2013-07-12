<?php


// --- obtenemos los datos que provienen del metodo post del formulario
$contacto_id = $_POST['contacto_id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero'];

// haremos una verificacion para saber si no hay ningun campo vacio
if($contacto_id!="" && $nombre!="" && $apellido!="" && $numero!=""){
	// si no lo hay procedemos
	include "conexion.php";
	$con = new Conexion();
	$consulta = "update contactos set nombre=\"$nombre\",apellido=\"$apellido\",numero=\"$numero\" where id=$contacto_id" ;
	if($con->conexion->query($consulta)){
		print "<script>window.location='editar.php?id=$contacto_id';</script>";
	}else {
		print "error";
	}

}else {
	print "datos vacios";
	print " <br>reintentar : <a href='index.php'>aqui</a>";
	}

?>