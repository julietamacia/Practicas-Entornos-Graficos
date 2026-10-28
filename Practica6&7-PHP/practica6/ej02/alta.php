<?php 
include "conexion.php";
$mensaje = "";

if(isset($_POST['guardar'])) {
    $link = retornarConexion();
    $ciudad = mysqli_real_escape_string($link, $_POST['ciudad']);
    $pais = mysqli_real_escape_string($link, $_POST['pais']);
    $habitantes = intval($_POST['habitantes']);
    $superficie = floatval($_POST['superficie']);
    $tieneMetro = intval($_POST['tieneMetro']);

    $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro')";

    if(mysqli_query($link, $sql)) {
        $mensaje = "Ciudad agregada exitosamente"; 
    } else {
        $mensaje = "Error al agregar la ciudad: " . mysqli_error($link);
    }

    mysqli_close($link);
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Alta de Ciudad</title>
</head>
<body>
    <h2>Alta de una nueva Ciudad</h2>
    <p style="color: green;"><?php echo $mensaje; ?></p>

    <form action="alta.php" method="post">
        <label for="ciudad">Ciudad:</label><br>
        <input type="text" id="ciudad" name="ciudad" required><br><br>

        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais" required><br><br>

        <label for="habitantes">Habitantes:</label><br>
        <input type="number" name="habitantes" id="habitantes" required><br><br>

        <label for="superficie">Superficie:</label><br>
        <input type="number" step="0.01" name="superficie" id="superficie" required><br><br>

        <label for="tieneMetro">Tiene metro:</label><br>
        <select name="tieneMetro" id="tieneMetro">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select><br><br>

        <input type="submit" name="guardar" value="Guardar ciudad">
    </form>
    <br>
    <a href="index.php">Volver al menú</a>
</body>
</html>