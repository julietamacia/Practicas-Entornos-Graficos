<?php

$conexion = mysqli_connect("localhost", "root", "", "prueba");
$nombre = mysqli_real_escape_string($conexion, $_GET['nombre']);

$consulta = mysqli_query($conexion, "SELECT * FROM buscador WHERE canciones LIKE '%$nombre%'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Búsqueda</title>
</head>
<body>
    <h2>Resultados para "<?php echo htmlspecialchars($nombre); ?>"</h2>
    <ul>
    <?php
    while ($fila = mysqli_fetch_array($consulta)) {
        echo "<li>" . $fila['canciones'] . "</li>";
    }
    ?>
    </ul>
    <br>
    <a href="buscador.php">Nueva búsqueda</a>
</body>
</html>