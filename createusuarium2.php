<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$id = $_POST['id'];
	$dni = $_POST['dni'];
	$user = $_POST['user'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$password = $_POST['password'];

	//preparar la consulta
	$consulta = "INSERT INTO usuarium(id, dni, user, nombre, apellidos, password)
				 VALUES('$id', '$dni', '$user', '$nombre','$apellidos', '$password')";

	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La usuarium se creó con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La usuarium no se pudo crear';
		include 'error.php';
	}
?>