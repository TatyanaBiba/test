<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nuevo usuario</title>
	</head>
	<body>
		<h2>Crear nuevo usuario</h2>
		<form method="post" action="createusuario2.php">
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
			<input type="text" name="apellidos"></input>
			<br>
			<input type="submit" name="create" value="Crear">
		</form>
	</body>
</html>