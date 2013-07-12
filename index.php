<html>
<head>
	<title>Contactix - Contacto</title>
	</head>
	<body>
		<h2>Lista de Contactos</h2>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="agregar.html">Agregar</a></li>
		</ul>

		<p>Seleccione el numero del contacto para editar o eliminar.</p><br>
		

<?php
include "conexion.php";

$con = new Conexion();
$consulta = "select * from contactos";
$query = $con->conexion->query($consulta);
$cantidad = 0;

while($resultado = $query->fetch_array()){
	print "<a href='editar.php?id=$resultado[id]'>$resultado[id]</a>.- <b>[$resultado[numero]] $resultado[nombre] $resultado[apellido]</b><br>";
	$cantidad++;
}
if($cantidad>0){
	print "<br>Total $cantidad contacto(s)";
}

?>
	</body>
</html>
