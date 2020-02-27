<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nuevo usuario</title>
	</head>
	<body>
		<h2>Crear nuevo usuario</h2>
		<form method="post" action="createciudad2.php">
			<label>ID:</label>
			<input type="text" name="id"><br>
			<label>DNI:</label>
			<input type="text" name="dni"><br>
			<label>User:</label>
			<input type="text" name="user"><br>
			<label>Password:</label>
			<input type="text" name="password"><br>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br>
			<label>Apellidos:</label>
			<textarea name="apellidos"></textarea>
			<br>
			<input type="submit" name="create" value="Crear">
		</form>
	</body>
</html>