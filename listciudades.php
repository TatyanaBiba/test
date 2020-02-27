<?php
	include 'bdd.php'; //conecta con la BDD

	$consulta = "SELECT id, nombre FROM ciudades";
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
		<title>Listar ciudades</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<script>
			function borrar(id){
				if(confirm('Seguro?'))
					location.href='borrarciudad.php?id='+id;
			}
		</script>
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

		<h2>Lista de ciudades</h2>
		
		<table border="1">
			<tr>
				<th>ID</th>
				<th>nombre</th>
				<th>operaciones</th>
			</tr>
			<?php 
				foreach($ciudades as $c){
					echo "<tr>";
					echo "<td>$c->id</td>";
					echo "<td>$c->nombre</td>";
					echo "<td>";
					echo "<a href='detalleciudad.php?id=$c->id'>ver</a> - ";
					echo "<a href='updateciudad1.php?id=$c->id'>editar</a> - ";
					echo "<a onclick='borrar($c->id);'>borrar</a>";
					echo "</td>";
					echo "</tr>";
				}
			?>
		</table>

	</body>
</html>