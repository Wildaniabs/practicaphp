<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
    <style>
        body {
            font-family: font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #839E57; 
            color: #fff; 
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
        }

        form {
            background-color: #fff; 
            padding: 20px;
            border-radius: 10px;
            width: 50%; 
            margin: 0 auto; 
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 20px); 
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4caf50; 
            color: #fff; 
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049; 
        }
    </style>
</head>

<body>
    <h1>Agregar Producto</h1>

    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto"
        <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" cols="50" rows="6" placeholder="Ingrese la descripción del producto"></textarea><br>

    <label for="precio">Precio:</label><br>
    <input type="text" id="precio" name="precio" placeholder="Ingrese el precio del producto"><br>
 
    <label for="categoria">Categorías:</label><br>
<select id="categoria" name="categoria">
    <option value="" disabled selected>Selecciona una categoría</option>
    <option value="Rizos">Rizos</option>
    <option value="Laceos">Laceos</option>
    <option value="Ondulados">Ondulados</option>
    <option value="Crespos">Crespos</option>
</select><br>

    <button type="submit" name="guardar">Guardar</button>
</form>

<h1>Buscar Producto</h1>
<form action="consulta.php" method="post">
    <input type="text" name="id" placeholder="ID del producto a buscar"><br>
    <button type="submit" name="submit">Buscar</button>
</form>

<h1>Editar Producto</h1>
<form action="update.php" method="POST">
    <input type="text" name="id" placeholder="ID del producto a editar"><br>
    <button type="submit" name="update">Editar</button>
</form>
<center>
<h3>Noticia Encontrada</h3>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Fecha</th>
</tr>


<?php
include_once 'conectar.php';


$query = "SELECT * FROM productos" ;
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
echo "<tr> <td>" . $row['id'] . "</td> 
<td>" . $row['name'] . "</td>
 <td>" . $row['desc'] . "</td> 
 <td>" . $row['category'] . "</td> 
 <td>" . $row['price'] . "</td> 
 <td>" . $row['date'] . "</td> 
<td> <a href='delete.php?rn=$row[id]'>Borrar</td> </tr>";;
    }
}


?>
</center>
</table>
</body>

</html>

