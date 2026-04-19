<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$opinion = $_POST['opinion'];

$sql = "INSERT INTO opiniones (nombre, fecha, opinion)
VALUES ('$nombre', '$fecha', '$opinion')";

echo '<div class="main">';

if ($conn->query($sql)) {
    echo "<h2>Opinión guardada correctamente ✅</h2>";
    echo '<a href="ver_opiniones.php" class="btn-volver">Ver opiniones</a>';
} else {
    echo "<h2>Error al guardar ❌</h2>";
}

echo '<br><br><a href="index.php" class="btn-volver">← Volver al inicio</a>';
echo '</div>';
?>