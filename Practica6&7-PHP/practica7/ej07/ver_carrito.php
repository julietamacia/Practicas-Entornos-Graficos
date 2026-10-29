<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "Compras");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito</title>
</head>
<body>
    <h2>Productos en tu Carrito</h2>
    <ul>
    <?php
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $idProd) {

            $res = mysqli_query($conexion, "SELECT * FROM catálogo WHERE id = $idProd");
            if ($row = mysqli_fetch_array($res)) {
                echo "<li>" . $row['producto'] . " - $" . $row['precio'] . "</li>";

            }
        }
    } else {
        echo "El carrito está vacío.";
    }
    ?>
    </ul>

    <a href="catalogo.php">Volver al catálogo</a>
</body>
</html>