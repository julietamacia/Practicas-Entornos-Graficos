<?php
$ultimoUsuario = isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : "";

if (isset($_POST['guardar'])) {
    $ultimoUsuario = $_POST['nombre'];
    setcookie('usuario', $ultimoUsuario, time() + 86400);
    echo "Cookie creada correctamente para: " . $ultimoUsuario;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recordar Usuario</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre de usuario:</label><br>
        <input type="text" name="nombre" value="<?php echo $ultimoUsuario; ?>" required>
        <input type="submit" name="guardar" value="Guardar">
    </form>
</body>
</html>