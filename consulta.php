<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Encontrado</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #3c1361;
            color: #fff;
            padding: 20px;
        }

        h3 {
            text-align: left;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #6a1b9a;
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 20px;
        }

        .data {
            margin-bottom: 10px;
        }

        .data label {
            font-weight: bold;
            display: inline-block;
            width: 100px;
            color: #fff;
            margin-right: 10px;
        }

        .data span {
            display: inline-block;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Producto Encontrado</h3>
        <?php
        include_once 'conectar.php';
        $id = $_POST['id'];

        $query = "SELECT * FROM productos where id=$id ";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);

        if ($total != 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                echo '<div class="data"><label>ID:</label><span>' . $row['id'] . '</span></div>';
                echo '<div class="data"><label>Nombre:</label><span>' . $row['name'] . '</span></div>';
                echo '<div class="data"><label>Descripción:</label><span>' . $row['desc'] . '</span></div>';
                echo '<div class="data"><label>Precio:</label><span>' . $row['price'] . '</span></div>';
                echo '<div class="data"><label>Categoría:</label><span>' . $row['category'] . '</span></div>';
                echo '<div class="data"><label>Fecha:</label><span>' . $row['date'] . '</span></div>';
            }
        } else {
            echo '<p>No se encontraron productos con el ID proporcionado.</p>';
        }
        ?>
    </div>
</body>

</html>
