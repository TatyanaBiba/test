<?php
	include 'bdd.php'; //conecta con la BDD

	$id = intval($_GET['id']);

	$consulta = "DELETE FROM ciudades
				 WHERE id=$id";
	
	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La ciudad fue eliminada con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La ciudad no se pudo eliminar';
		include 'error.php';
	}
?>