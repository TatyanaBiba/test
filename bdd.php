<?php

	if(empty($conexion)){

		$conexion=new mysqli('10.199.26.170','alumne','','ACTIVIDAD01_viajes');

		$conexion->set_charset('UTF8');
	}
?>