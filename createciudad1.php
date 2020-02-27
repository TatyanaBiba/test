<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nueva ciudad</title>

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

		<h2>Crear nueva ciudad</h2>
		<form method="post" action="createciudad2.php">
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br>
			<label>Descripción:</label>
			<textarea name="descripcion"></textarea>
			<br>
			<input type="submit" name="create" value="Crear">
		</form>
	</body>
</html>