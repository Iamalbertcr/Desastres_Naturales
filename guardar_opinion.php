<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$opinion = $_POST['opinion'];

$sql = "INSERT INTO opiniones (nombre, fecha, opinion)
VALUES ('$nombre', '$fecha', '$opinion')";

if ($conn->query($sql)) {
    echo "Guardado correctamente <a href='ver_opiniones.php'>Ver opiniones</a>";
} else {
    echo "Error";
}
?>