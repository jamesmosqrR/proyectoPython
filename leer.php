<?php

require_once 'conexion.php';

$conexion = new Conexion();
$conexion = $conexion->conectar();

$consulta = $conexion->prepare("SELECT * FROM mi_tabla");
$consulta->execute();
$resultados = $consulta->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Leer registros</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Teléfono</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($resultados as $fila) { ?>
				<tr>
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellido']; ?></td>
					<td><?php echo $fila['email']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<form action="leer_registro.php" method="GET">
		<label>ID del registro:</label>
		<input type="text" name="id">
		<input type="submit" name="leer" value="Leer">
	</form>
</body>
</html>
