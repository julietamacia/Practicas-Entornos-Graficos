<?php
session_start();

if(!isset($_SESSION['contador_visitadas'])) {
    $_SESSION['contador_visitadas'] = 1;
} else {
    $_SESSION['contador_visitadas']++;
}
?>

<html>
<head>
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido/a a nuestra web</h1>
    <p>Cantidad de páginas visitadas en esta sesión: 
        <strong><?php echo $_SESSION['contador_visitadas']; ?></strong>
    </p>
    <p><a href="ej04.php">Visitar otra página</a></p>
</body>
</html>