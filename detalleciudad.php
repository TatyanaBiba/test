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
		<title>Detalles de la ciudad <?php echo $ciudad->nombre;?></title>

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
		
		<h2>Detalles de la ciudad <?php echo $ciudad->nombre;?></h2>
		
		<h3>Nombre</h3>
		<?php echo $ciudad->nombre;?>

		<h3>Descripción</h3>
		<p><?php echo $ciudad->descripcion;?></p>

		<a href="listciudades.php">Listado de ciudades</a>

	</body>
</html>