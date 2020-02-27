<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$consulta = "SELECT * FROM usuarios";
	$resultados = $conexion->query($consulta);

	$ciudades = [];//lista vacia

	while($ciudades=$resultados->fetch_object())
		$ciudades[] = $ciudad;

	$resultados->free(); //libera memoria

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lsta ciudades</title>
	</head>
	<body>
		<table border="1">
		<tr>
			<th>DNI</th>
			<th>User</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Password</th>
			<th></th>
		</tr>
<?php
		foreach ($ciudades as $c) {
			echo "<tr>";
			echo "<td>$c->dni</td>";
			echo "<td>$c->user</td>";
			echo "<td>$c->nombre</td>";
			echo "<td>$c->apellidos</td>";
			echo "<td>$c->password</td>";
			echo "<td></td>";
			echo "</tr>";
			# code...
		}

?>

		</table>
	</body>
</html>