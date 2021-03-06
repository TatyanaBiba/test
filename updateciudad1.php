<?php
	include 'bdd.php'; //conecta con la BDD

	//recuperar el id que llega por GET
	$id = intval($_GET['id']);

	//preparar la consulta
	$consulta = "SELECT * 
				 FROM ciudades
				 WHERE id=$id";

	//ejecutar la consulta
	$resultado = $conexion->query($consulta);

	//convertir el resultado en un objeto
	$ciudad = $resultado->fetch_object();

	$resultado->free(); //libera la memoria
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Actualizar ciudad <?php echo $ciudad->nombre;?></title>

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

		<h2>Actualizar la ciudad <?php echo $ciudad->nombre;?></h2>
		<form method="post" action="updateciudad2.php">
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $ciudad->nombre;?>">
			<br>
			<label>Descripción:</label>
			<textarea name="descripcion"><?php echo $ciudad->descripcion;?></textarea>
			<br>
			<input type="hidden" name="id" value="<?php echo $ciudad->id;?>">
			<input type="submit" name="update" value="Actualizar">
		</form>
	</body>
</html>