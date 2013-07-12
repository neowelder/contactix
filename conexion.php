<?php
// 12 de junio del 2012
// clase que maneja la conecion a la base de datos

class Conexion {
	public $conexion ;
	public function Conexion(){
		$user = "root";
		$pass = "";
		$host = "localhost";
		$ddbb = "contactix";
		$this->conexion = new mysqli($host,$user,$pass,$ddbb);
	}
}

?>