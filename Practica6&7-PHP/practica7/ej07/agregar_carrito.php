<?php

session_start();

$id = $_GET['id'];
$_SESSION['carrito'][] = $id;

header("Location: catalogo.php");
?>