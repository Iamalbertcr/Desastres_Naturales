<?php
include("conexion.php");

$result = $conn->query("SELECT * FROM opiniones");

echo '<div class="main">';
echo "<h2>Opiniones</h2>";

while($row = $result->fetch_assoc()){
    echo "<p>";
    echo "<b>".$row['nombre']."</b> (".$row['fecha'].")<br>";
    echo $row['opinion'];
    echo "</p><hr>";
}

echo '<a href="index.php" class="btn-volver">← Volver al inicio</a>';
echo '</div>';
?>