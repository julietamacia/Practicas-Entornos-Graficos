<?php
if (!isset($_COOKIE['contador'])) {
    setcookie('contador', 1, time() + 3600);
    echo "¡Bienvenido! Esta es la primera vez que visitas la página.";
} else {
    $visitas = $_COOKIE['contador'] + 1;
    setcookie('contador', $visitas, time() + 3600);
    echo "Has visitado esta página " . $visitas . " veces.";
}
?>