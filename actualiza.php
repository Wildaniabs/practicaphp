<?php
include_once 'conectar.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nombre = $_POST['name']; 
    $descripcion = $_POST['desc']; 
    $categoria = $_POST['category']; 

    
    $query = "UPDATE `productos` SET name='$nombre', `desc`='$descripcion', category='$categoria' WHERE id=$id"; 
    mysqli_query($mysqli, $query);
}

header("location: ./index.php?insert=success");
?>
