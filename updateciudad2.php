<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];


	//preparar la consulta
	$consulta = "UPDATE ciudades
				 SET nombre='$nombre',
				 	 descripcion='$descripcion'
				 WHERE id=$id";

	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La ciudad se actualizó con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La ciudad no se pudo actualizar';
		include 'error.php';
	}
?>