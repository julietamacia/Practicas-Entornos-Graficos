<?php

session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido/a, " . $_SESSION['nombre'] . " a la zona segura.</h1>";
} else {
    echo "Acceso denegado. No puedes visitar esta página.";
}

?>