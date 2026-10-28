<?php 
include "conexion.php";
$link = retornarConexion();

$cant_por_pagina = 5;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $cant_por_pagina;

//cálculo del total de registros para la paginación
$sql_total = "SELECT COUNT(*) FROM ciudades";
$res_total = mysqli_query($link, $sql_total);
$fila_total = mysqli_fetch_array($res_total);
$total_registros = $fila_total[0];
$total_paginas = ceil($total_registros / $cant_por_pagina);

//consulta
$sql = "SELECT id, ciudad, pais, habitantes, superficie, tieneMetro   FROM ciudades LIMIT $inicio, $cant_por_pagina";
$resultado = mysqli_query($link, $sql);

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Ciudades</title>
</head>
<body>
    <h2>Listado de Ciudades</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>id</th>
            <th>ciudad</th>
            <th>país</th>
            <th>habitantes</th>
            <th>superficie</th>
            <th>tieneMetro</th>
        </tr>
        <?php while($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $fila['id']?></td>
            <td><?php echo $fila['ciudad']?></td>
            <td><?php echo $fila['pais']?></td>
            <td><?php echo $fila['habitantes']?></td>
            <td><?php echo $fila['superficie']?></td>
            <td><?php echo $fila['tieneMetro'] ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <div>
        Páginas: 
        <?php for($i=1; $i <= $total_paginas; $i++) { ?>
            <a href="listado.php?pagina=<?php echo $i; ?>"></a>
        <?php } ?>
    </div>
    <br>
    <a href="index.php">Volver al menú</a>
</body>
</html>

<?php 
mysqli_free_result($resultado);
mysqli_close($link);
?>