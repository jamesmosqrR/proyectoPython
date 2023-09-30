<?php

require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexion = new Conexion();
    $conexion = $conexion->conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $consulta = $conexion->prepare("INSERT INTO mi_tabla (nombre, apellido, email, telefono) VALUES (?, ?, ?, ?)");
	
    $consulta->execute([$nombre, $apellido, $email, $telefono]);

    echo "Registro insertado correctamente.";
}

?>

<!DOCTYPE html>
<html>
	
<head>
	<title>Insertar registro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<form method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" class="form-control" placeholder="Nombre"><br>

		<label>Apellido:</label>
		<input type="text" name="apellido" class="form-control" placeholder="Apellido"><br>

		<label>Email:</label>
		<input type="text" name="email" class="form-control" placeholder="Email"><br>

		<label>Teléfono:</label>
		<input type="text" name="telefono" class="form-control"><br>

		<input type="submit" name="guardar" class="btn btn-primary form-control" value="Guardar">
	</form>
</body>
</html>
