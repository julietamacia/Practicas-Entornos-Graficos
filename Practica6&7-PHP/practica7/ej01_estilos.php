<?php 
if (isset($_POST['estilo'])) {
    $estiloSeleccionado = $_POST['estilo'];
    setcookie('estilo_preferido', $estiloSeleccionado, time() + 86400); //dura 1 día
} elseif (isset($_COOKIE['estilo_preferido'])) {
    $estiloSeleccionado = $_COOKIE['estilo_preferido'];
} else {
    $estiloSeleccionado = 'claro'; //estilo por defecto
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página con Estilo Configurable</title>
    <!-- Carga dinámica de la hoja de estilo según la cookie -->
    <link rel="stylesheet" href="<?php echo $estiloSeleccionado; ?>.css">
</head>
<body>
    <h1>Personalizá el aspecto de la página</h1>
    <form action="" method="post">
        <select name="estilo">
            <option value="claro" <?php if($estiloSeleccionado=='claro') echo 'selected'; ?>>Claro</option>
            <option value="oscuro" <?php if($estiloSeleccionado=='oscuro') echo 'selected'; ?>>Oscuro</option>
            <option value="pastel" <?php if($estiloSeleccionado=='pastel') echo 'selected'; ?>>Pastel</option>
        </select>
        <input type="submit" value="Guardar Preferencia">
    </form>
</body>
</html>