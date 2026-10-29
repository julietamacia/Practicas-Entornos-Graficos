<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['nivel'] = "Administrador"; //segunda variable de sesión
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sesión Iniciada</title>
</head>
<body>
    <h2>Variables de sesión creadas correctamente.</h2>
    <a href="pagina3.php">Ir a la tercera página para recuperar datos</a>
</body>
</html>