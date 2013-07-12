<?php
$contacto_id = $_GET['id'];
include "conexion.php";
$con = new Conexion();
$consulta = "select * from contactos where id=$contacto_id";
$query = $con->conexion->query($consulta);

$nombre = "";
$apellido = "";
$numero = "";

while($resultado = $query->fetch_array()){
$nombre = $resultado['nombre'];
$apellido = $resultado['apellido'];
$numero = $resultado['numero'];
}

?>
<html>
<head>
	<title>Contactix - Editar Contacto</title>
	</head>
	<body>
		<h2>Editar Contacto</h2>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="agregar.html">Agregar</a></li>
		</ul>
<?php 
if($contacto_id!="" && $nombre!="" && $apellido!="" && $numero!=""){
print <<<AAA
		<p>Rellene los datos correspondientes al contacto!.</p>
		<form method="post" action="actualizar.php">
		<table>
		<input type="hidden" name="contacto_id" value="$contacto_id">
			<tr>
				<td>Nombre : </td>
				<td><input type="text" name="nombre" value="$nombre"></td>
			</tr>
			<tr>
				<td>Apellido : </td>
				<td><input type="text" name="apellido" value="$apellido"></td>
			</tr>
			<tr>
				<td>Numero : </td>
				<td><input type="text" name="numero" value="$numero"></td>
			</tr>
			<tr>
				<td></td>
				<td>
				<a href='eliminar.php?id=$contacto_id'>Eliminar</a>
				<input type="submit" value="Actualizar">
				</td>
			</tr>
		</table>
		</form>
AAA;
}else {

}
?>
	</body>
</html>