<?php
include("conexion.php");

$result = $conn->query("SELECT * FROM opiniones");

echo "<h2>Opiniones</h2>";

while($row = $result->fetch_assoc()){
    echo "<p><b>".$row['nombre']."</b> (".$row['fecha'].")<br>";
    echo $row['opinion']."</p><hr>";
}
echo '<br><a href="index.php" class="btn-volver">← Volver al inicio</a>';
?>
?>