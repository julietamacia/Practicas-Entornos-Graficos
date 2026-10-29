<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recuperar Sesión</title>
</head>
<body>
    <h2>Datos recuperados de la sesión:</h2>
    <p>Usuario: <?php echo $_SESSION['usuario']; ?></p>
    <p>Nivel de acceso: <?php echo $_SESSION['nivel']; ?></p>
</body>
</html>