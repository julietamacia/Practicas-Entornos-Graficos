<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "base2") or die("Error de conexión");

$mail = $_POST['mail'];

$resultado = mysqli_query($conexion, "SELECT nombre FROM alumnos WHERE mail = '$mail'");

if ($fila = mysqli_fetch_array($resultado)) {
    $_SESSION['nombre'] = $fila['nombre'];
    echo "Mail verificado!<br><a href='bienvenida.php'>Ir a la página de bienvenida</a>";
} else {
    echo "El mail ingresado no se encuentra registrado en la base de datos.";
}

mysqli_close($conexion);

?>