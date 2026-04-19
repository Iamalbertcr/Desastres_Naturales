<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Enviar Opinión</h2>

<form action="guardar_opinion.php" method="POST">
Nombre: <input type="text" name="nombre"><br><br>
Fecha: <input type="date" name="fecha"><br><br>
Opinión:<br>
<textarea name="opinion"></textarea><br><br>
<input type="submit" value="Guardar">
</form>

</body>
</html>