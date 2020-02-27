<?php
	include 'bdd.php'; //conecta con la BDD

	$id = intval($_GET['id']);

	$consulta = "DELETE FROM usuarios
				 WHERE id=$id";
	
	//ejecutar la consulta
	if($conexion->query($consulta)){
		$mensaje = 'La usuario fue eliminada con éxito';
		include 'exito.php'; 
	}else{
		$mensaje = 'La usuario no se pudo eliminar';
		include 'error.php';
	}
		$consulta = "SELECT id, dni, user, nombre, apellidos, password FROM usuarios";
	$resultados = $conexion->query($consulta);
	$usuarios = [];
	while($usuario=$resultados->fetch_object())
		$usuarios[]=$usuario;

	$resultados->free(); //libera memoria
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lsta usuarios</title>
				<script>
			function borrar(id){
				if(confirm('Seguro?'))
					location.href='borrarusuario.php?id='+id;
			}
		</script>
	</head>
	<body>
		<h1>USUARIOS</h1>
		<nav>
			<ul>
				<li><a href="createusuario1.php">Nuevo usuario</a></li>
				<li><a href="listausuarios.php">Listar usuarios</a></li>
			</ul>
		</nav>

		<h2>Lista usuarios</h2>
		<table border="1">
		<tr><th>ID</th>
			<th>DNI</th>
			<th>User</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Password</th>
			<th>Detallesusuario</th>
		</tr>
<?php
		foreach ($usuarios as $u) 
				{
			echo "<tr>";
			echo "<td>$u->id</td>";
			echo "<td>$u->dni</td>";
			echo "<td>$u->user</td>";
			echo "<td>$u->nombre</td>";
			echo "<td>$u->apellidos</td>";
			echo "<td>$u->password</td>";
			echo "<td>";
			echo "<a href='detalleusuario.php?id=$u->id'>Ver</a>";
			echo "<a onclick='borrar($u->id);'>Borrar</a>";
			echo "</td>";
			echo "</tr>";
		}
?>

		</table>
	</body>
</html>