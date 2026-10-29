<?php 
if (isset($_POST['titular'])) {
    $titular = $_POST['titular'];
    setcookie('tipo_titular', $titular, time() + 86400);
} elseif (isset($_COOKIE['tipo_titular'])) {
    $titular = $_COOKIE['tipo_titular'];
} else {
    $titular = 'todos'; //primera vez muestra todos
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Periódico Digital</title>
</head>
<body>
    <h1>Bienvenido a nuestro periódico</h1>
    <form action="" method="post">
        <p>Elija su preferencia de titulares:</p>
        <input type="radio" name="titular" value="politica" <?php if($titular=='politica') echo 'checked'; ?>> Noticia política<br>
        <input type="radio" name="titular" value="economica" <?php if($titular=='economica') echo 'checked'; ?>> Noticia económica<br>
        <input type="radio" name="titular" value="deportiva" <?php if($titular=='deportiva') echo 'checked'; ?>> Noticia deportiva<br><br>
        <input type="submit" value="Configurar Periódico">
    </form>
    <hr>
    <?php
    if ($titular == 'politica' || $titular == 'todos') {
        echo "<h2>Noticia Política:</h2><p>Nuevas medidas económicas anunciadas por el gobierno nacional...</p>";
    }
    if ($titular == 'economica' || $titular == 'todos') {
        echo "<h2>Noticia Económica:</h2><p>Variación en las cotizaciones de monedas extranjeras este mes...</p>";
    }
    if ($titular == 'deportiva' || $titular == 'todos') {
        echo "<h2>Noticia Deportiva:</h2><p>Excelente desempeño de la selección en el último torneo...</p>";
    }
    ?>
    <br><br>
    <a href="borrar_cookie.php">Restablecer preferencias (Borrar cookie)</a>
</body>
</html>