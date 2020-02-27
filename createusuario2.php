<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$dni = $_POST['dni'];
	$user = $_POST['user'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$password = $_POST['password'];

	//preparar la consulta
	$consulta = "INSERT INTO usuarios( dni, user, nombre, apellidos, password)
				 VALUES('$dni', '$user', '$nombre','$apellidos', '$password')";

	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La usuarium se creó con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La usuarium no se pudo crear'.$consulta;
		include 'error.php';
	}
?>