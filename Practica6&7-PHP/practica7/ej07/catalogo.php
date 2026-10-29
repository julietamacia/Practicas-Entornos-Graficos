<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "Compras");

$res = mysqli_query($conexion, "SELECT * FROM catálogo");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Compras</title>
</head>
<body>
    <h2>Catálogo de Productos</h2>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Producto</th><th>Precio</th><th>Acción</th></tr>
        
        <?php while($f = mysqli_fetch_array($res)) { ?>
        <tr>
            <td><?php echo $f['id']; ?></td>
            <td><?php echo $f['producto']; ?></td>
            <td>$<?php echo $f['precio']; ?></td>
            <td><a href="agregar_carrito.php?id=<?php echo $f['id']; ?>">Comprar</a></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="ver_carrito.php">Ver Carrito de Compras</a>
</body>
</html>