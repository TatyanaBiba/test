<?php

	include 'bdd.php'; //conecta con la BDD

	//tomar los datos que llegan por POST
	$consulta = "SELECT * FROM usuarios";
	$resultados = $conexion->query($consulta);
	
	$usuarios = [];//lista vacia

	$id = intval($_GET['id']);

	$consulta = "SELECT * FROM usuarios
	WHERE id "

	    while($usuario=$resultados->fetch_object())
	        $usuarios[]=$usuario;

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
			<th>Detallesusuario</th>
		</tr>
<?php
		foreach ($usuarios as $c) {
			echo "<tr>";
			echo "<td>$c->dni</td>";
			echo "<td>$c->user</td>";
			echo "<td>$c->nombre</td>";
			echo "<td>$c->apellidos</td>";
			echo "<td>$c->password</td>";
			echo "<td>";
			echo "<a href='detalleusuario.php?id=$u->id'>Ver</a>";
			echo "</td>";
			echo "</tr>";
		}
?>

		</table>
	</body>
</html>