<?php
include("conexion.php");
$link = retornarConexion();
$mensaje = "";
$ciudad_data = null;

if (isset($_POST['buscar'])) {
    $id = intval($_POST['id']);
    $res = mysqli_query($link, "SELECT * FROM ciudades WHERE id = $id");
    if ($fila = mysqli_fetch_array($res)) {
        $ciudad_data = $fila;
    } else {
        $mensaje = "No se encontró ninguna ciudad con ese ID.";
    }
}

if (isset($_POST['actualizar'])) {
    $id = intval($_POST['id']);
    $ciudad = mysqli_real_escape_string($link, $_POST['ciudad']);
    $pais = mysqli_real_escape_string($link, $_POST['pais']);
    $habitantes = intval($_POST['habitantes']);
    $superficie = floatval($_POST['superficie']);
    $tieneMetro = intval($_POST['tieneMetro']);

    $sql = "UPDATE ciudades SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes, superficie=$superficie, tieneMetro=$tieneMetro WHERE id=$id";
    if (mysqli_query($link, $sql)) {
        $mensaje = "Ciudad actualizada correctamente.";
    } else {
        $mensaje = "Error al actualizar: " . mysqli_error($link);
    }
}

mysqli_close($link);

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Modificación de Ciudad</title>
</head>
<body>
    <h2>Modificar una Ciudad</h2>
    <p style="color: blue;"><?php echo $mensaje; ?></p>
    
    <form action="modificacion.php" method="post">
        Ingrese el ID de la ciudad a modificar: <input type="number" name="id" required>
        <input type="submit" name="buscar" value="Buscar">
    </form>
    <br>

    <?php if ($ciudad_data) { ?>
    <form action="modificacion.php" method="post">

        <input type="hidden" name="id" value="<?php echo $ciudad_data['id']; ?>">

        <label for="ciudad">Ciudad:</label><br>
        <input type="text" name="ciudad" value="<?php echo $ciudad_data['ciudad']; ?>" required><br><br>

        <label for="pais">País:</label><br>
        <input type="text" name="pais" value="<?php echo $ciudad_data['pais']; ?>" required><br><br>

        <label for="habitantes">Habitantes:</label><br>
        <input type="number" name="habitantes" value="<?php echo $ciudad_data['habitantes']; ?>" required><br><br>

        <label for="superficie">Superficie:</label><br>
        <input type="number" step="0.01" name="superficie" value="<?php echo $ciudad_data['superficie']; ?>" required><br><br>

        <label for="tieneMetro">Tiene metro:</label><br>
        <select name="tieneMetro" id="tieneMetro">
            <option value="1" <?php if($ciudad_data['tieneMetro'] == 1) echo 'selected'; ?>>Sí</option>
            <option value="0" <?php if($ciudad_data['tieneMetro'] == 0) echo 'selected'; ?>>No</option>
        </select><br><br>

        <input type="submit" name="actualizar" value="Actualizar ciudad">
    </form>
    <?php } ?>
    <br>
    <a href="index.php">Volver al menú</a>
</body>
</html>