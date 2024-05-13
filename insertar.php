<?php

include_once 'conectar.php';

$nombre_producto = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$fecha = date('Y-m-d'); 

$sqlinsert = "INSERT INTO productos VALUES (0, '$nombre_producto', '$descripcion', '$categoria', '$precio', '$fecha')"; 

mysqli_query($mysqli, $sqlinsert);

header("location:./index.php?insert=success");
?>
