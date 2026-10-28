<?php
function retornarConexion() {
    $link = mysqli_connect("localhost", "root", "", "Capitales") or die("Problemas con la conexión a la base de datos");
    return $link;
}
?>