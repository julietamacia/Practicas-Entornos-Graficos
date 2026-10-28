<?php
include("conexion.php");
$mensaje = "";

if (isset($_POST['eliminar'])) {
    $link = retornarConexion();
    $id = intval($_POST['id']);
    
    $sql = "DELETE FROM ciudades WHERE id = $id";
    if (mysqli_query($link, $sql)) {
        if (mysqli_affected_rows($link) > 0) {
            $mensaje = "Ciudad eliminada correctamente";
        } else {
            $mensaje = "No se encontró ninguna ciudad con el ID especificado";
        }
    } else {
        $mensaje = "Error al eliminar: " . mysqli_error($link);
    }

    mysqli_close($link);
    
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Baja de Ciudad</title>
</head>
<body>
    <h2>Eliminar una Ciudad</h2>
    <p style="color: red;"><?php echo $mensaje; ?></p>
    
    <form action="baja.php" method="post">
        Ingrese el ID de la ciudad a eliminar: <input type="number" name="id" required>
        <input type="submit" name="eliminar" value="Eliminar" onclick="return confirm('¿Está seguro de eliminar esta ciudad?');">
    </form>
    <br>
    <a href="index.php">Volver al Menú</a>
</body>
</html>