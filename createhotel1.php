<?php
	include 'bdd.php'; //conecta con la BDD

	$consulta = "SELECT id, nombre 
				 FROM ciudades
				 ORDER BY nombre ASC";
	$resultados = $conexion->query($consulta);

	$ciudades = []; //lista vacía

	//convierto los resultados a objetos y los
	//meto en la lista
	while($ciudad = $resultados->fetch_object())
		$ciudades[] = $ciudad;

	$resultados->free(); //libera la memoria
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nuevo Hotel</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<h1>Viajes</h1>
		<nav>
			<ul>
				<li><a href="createciudad1.php">Nueva ciudad</a></li>
				<li><a href="listciudades.php">Listar ciudades</a></li>
				<li><a href="createhotel1.php">Nuevo hotel</a></li>
			</ul>
		</nav>

		<h2>Crear nuevo hotel</h2>
		<form method="post" action="createhotel2.php">
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br>
			<label>Estrellas:</label>
			<input type="number" name="estrellas" value="5">
			<br>

			<label>Ciudad:</label>
			<select name="ciudad">
			<?php
				foreach($ciudades as $c)
					echo "<option value='$c->id'>$c->nombre</option>";
			?>
			</select>
			<br>
			<input type="submit" name="create" value="Crear">
		</form>
	</body>
</html>