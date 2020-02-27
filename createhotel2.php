<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$nombre = $_POST['nombre'];
	$estrellas = intval($_POST['estrellas']);
	$ciudad = $_POST['ciudad'];


	//preparar la consulta
	$consulta = "INSERT INTO hoteles(nombre, estrellas, idciudad)
				 VALUES('$nombre',$estrellas, $ciudad)";

	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'El hotel se creó con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'El hotel no se pudo crear';
		include 'error.php';
	}
?>