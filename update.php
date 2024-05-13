<?php
include_once 'conectar.php';
$id = $_POST['id'];

$sql = "SELECT * FROM productos where id=$id;";
$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $desc = $row['desc'];
    $category = $row['category'];
    $price = $row['price']; 
}
?>

<h2>Editar Productos:</h2>
<form action="actualiza.php" method="POST">
    <input type="text" name="id" placeholder="ID" value="<?php echo $id?>"><br>
    <br><input type="text" name="name" placeholder="Nombre del producto" value="<?php echo $name?>"><br>
    <br><input type="text" name="desc" placeholder="Descripción del producto" value="<?php echo $desc?>"><br>
    <br><input type="text" name="category" placeholder="Categoría" value="<?php echo $category?>"><br>
    <br><input type="text" name="price" placeholder="Precio" value="<?php echo $price?>"><br><br>

    <br><button type="submit"  name="update">Editar</button>
</form>

