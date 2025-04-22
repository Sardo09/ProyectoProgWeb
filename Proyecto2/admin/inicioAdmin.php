<?php
include ("../base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include ("../base/funciones.php"); // Incluye el archivo de funciones
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--styles.css-->
    <link rel="preload" href="..\css\styles.css" as="style">
    <link href="..\css\styles.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Logo-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=connecting_airports" />
</head>
<body>
    <header>
        <?php include '../base/header.php'; ?>
    </header>    
        <?php include '../base/barra.php'; ?>
    <br>
    <br><br>
    <main class="contenedor sombra">
        <h1 style="text-align: center;">Viajes</h1>
        <h2></h2>
        <!-- lista de viajes y el boton para abrir la pagina de edición -->
        <?php
            $confirmMsg = "¿Estás seguro de eliminar el viaje?";
            $query = "SELECT * FROM aviones ORDER BY idAvion ASC";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    $lugarViaje = $row['lugarViaje'];
                    $descLugar = $row['descLugar'];
                    $precio = $row['precio'];
                    $numAsientos = $row['numAsientos'];
                    $imagen = $row['imagen'];
                    $fechaSalida = $row['fechaSalida'];
                    $fechaRegreso = $row['fechaRegreso'];
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>lugarViaje</th>';
                    echo '<th>descLugar</th>';
                    echo '<th>precio</th>';
                    echo '<th>numAsientos</th>';
                    echo '<th>imagen</th>';
                    echo '<th>fechaSalida</th>';
                    echo '<th>fechaRegreso</th>';
                    
                    echo '</tr>';
                    echo '<br>';
                    echo '<tr>';
                    echo '<td>'.$row['idAvion'].'</td>';
                    echo '<td>'.$row['lugarViaje'].'</td>';
                    echo '<td>'.$row['descLugar'].'</td>';
                    echo '<td>'.$row['precio'].'</td>';
                    echo '<td>'.$row['numAsientos'].'</td>';
                    echo '<td>'.$row['imagen'].'</td>';
                    echo '<td>'.$row['fechaSalida'].'</td>';
                    echo '<td>'.$row['fechaRegreso'].'</td>';
                    echo '<td><a href="editarViaje.php?id='.$row['idAvion'].'">Editar</a></td>';
                    echo '<a href="eliminarViaje.php?id='.$row['idAvion'].'"
                        onclick="return confirm(\'' . $confirmMsg .'\');">Eliminar</a>'; 
                    echo '</tr>';
                    echo '</table>';
                }
            }
        ?>
    </main>
    </div> <!-- .flex-posts -->
    <?php include '../base/footer.php'; ?>
</body>
</html>