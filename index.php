<!DOCTYPE html>
<html>
<head>
    <title>Desastres Naturales</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h1>Desastres Naturales</h1>
    <p>Impacto, prevención y conciencia</p>
    <img src="https://via.placeholder.com/800x200">
</header>

<?php include("menu.php"); ?>

<div class="container">

<div class="main">
<?php
if(isset($_GET['page'])){
    include($_GET['page'] . ".php");
} else {
    echo "<h2>Bienvenido</h2>
    <p>Los desastres naturales representan uno de los mayores retos para la humanidad...</p>";
}
?>
</div>

<div class="sidebar">
<?php include("noticias.php"); ?>
</div>

</div>

</body>
</html>