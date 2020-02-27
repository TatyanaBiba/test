<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];


	//preparar la consulta
	$consulta = "INSERT INTO ciudades(nombre, descripcion)
				 VALUES('$nombre','$descripcion')";

	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La ciudad se creó con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La ciudad no se pudo crear';
		include 'error.php';
	}
?>