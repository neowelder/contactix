<?php
$contacto_id = $_GET['id'];
if($contacto_id!=""){

	include "conexion.php";
	$con = new Conexion();
	$consulta = "delete from contactos where id=$contacto_id";
		if($con->conexion->query($consulta)){
			print "<script>window.location='index.php';</script>";
		}else {
			print "error";
		}
}
?>