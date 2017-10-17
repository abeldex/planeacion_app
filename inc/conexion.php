<?php
	//creamos las variables para realizar la conexion a la base de datos
	$servidor = "localhost";
	$usuario = "root";
	$password = "geode2530";
	$database = "planeacion_app";
	//realizmos la conexion
	$con = mysqli_connect($servidor, $usuario, $password, $database) or die("Error al conectar a la BD" . mysqli_error($con));

	mysqli_set_charset($con, "utf8")

?>