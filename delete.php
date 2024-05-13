<?php
include_once 'conectar.php';
$id =$_GET['rn'];
$query = "DELETE FROM productos where ID = '$id'";

$data=mysqli_query($mysqli, $query);
header("location: ./index.php?insert=success")
?>