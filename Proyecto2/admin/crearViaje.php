<?php
include ("../base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include ("../base/funciones.php"); // Incluye el archivo de funciones

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start(); // Inicia la sesión
    // Obtiene los datos del formulario
    $lugarViaje = $_POST['lugarViaje'];
    $descLugar = $_POST['descLugar'];
    $precio = $_POST['precio'];
    $numAsientos = $_POST['numAsientos'];
    $imagen = $_FILES['image']['name'];
    $fechaSalida = $_POST['fechaSalida'];
    $fechaRegreso = $_POST['fechaRegreso'];

    $ext = pathinfo($imagen, PATHINFO_EXTENSION); // Obtiene la extensión del archivo
    $tiposPermitidos = array("jpg", "jpeg", "png", "gif"); // Tipos de archivos permitidos
    $dir = "../imagenes/".$imagen; // Ruta donde se guardará la imagen
    $tempName = $_FILES['image']['tmp_name']; // Nombre temporal del archivo

    //verifica si la fecha de regreso es mayor a la de salida
    if($fechaSalida > $fechaRegreso){
        echo "<script>alert('La fecha de regreso no puede ser menor a la de salida');</script>";
    }

    // Verifica si la imagen es válida
    if ($_FILES['imagen']['size'] > 100000000) { // 100MB
        echo "<script>alert('El archivo es demasiado grande');</script>";
    }else
    {
        if(in_array($ext, $tiposPermitidos)){
            if(move_uploaded_file($tempName, $dir))
            {
                //crea los valores en la base de datos
                $query = "INSERT INTO aviones (lugarViaje, descLugar, precio, numAsientos, imagen, fechaSalida, fechaRegreso) VALUES ('$lugarViaje', '$descLugar', '$precio', '$numAsientos', '$imagen', '$fechaSalida', '$fechaRegreso')";
                mysqli_query($con, $query);
    
                //se informa que se ha editado el viaje
                echo "<script>alert('Se ha creado exitosamente');</script>";
    
                // Redirige a la página de inicioAdmin.php
                header("Location: inicioAdmin.php");
    
            }else
            {
                echo "<script>alert('Error al subir la imagen');</script>";
            }
        }
        else {
            echo "<script>alert('Tipo de archivo no permitido');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un viaje</title>
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
        <h1 style="text-align: center;">Crear un vuelo</h1>
        <h2></h2>
        <section class="formCorreo">
            <form method="POST" class="formCorreo" enctype="multipart/form-data">
                <fieldset>
                    <div class="div-registro">
                        <div class="camposRegistro">
                            <label>lugarViaje</label>
                            <input class="input-text" type="text" placeholder="Lugar del viaje" id="lugarViaje" name="lugarViaje" maxlength="50" required>
                        </div>
                        <div class="camposRegistro">
                            <label>descLugar</label>
                            <input class="input-text" type="text" placeholder="Descripción del lugar" id="descLugar" name="descLugar" maxlength="250" required>
                        </div>
                        <div class="camposRegistro">
                            <label>precio</label>
                            <input class="input-text" type="number" placeholder="Precio" id="precio" name="precio" maxlength="6" required>
                        </div>
                        <div class="camposRegistro">
                            <label>numAsientos</label>
                            <input class="input-text" type="number" placeholder="Número de asientos" id="numAsientos" name="numAsientos" maxlength="2" required>
                        </div>
                        <div class="camposRegistro">
                            <label>imagen</label>
                            <input class="input-text" type="file" placeholder="imagen" id="" name="image" required>
                        </div>
                        <div class="camposRegistro">
                            <label>fechaSalida</label>
                            <input class="input-text" type="date" placeholder="Fecha de salida" id="fechaSalida" name="fechaSalida" required>
                        </div>
                        <div class="camposRegistro">
                            <label>fechaRegreso</label>
                            <input class="input-text" type="date" placeholder="Fecha de regreso" id="fechaRegreso" name="fechaRegreso" required>
                        </div>
                    </div>
                    <div class="campos-registro flex">
                        <input class="boton w-sm-100" type="submit" value="Guardar cambios">
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    </div> <!-- .flex-posts -->
    <?php include '../base/footer.php'; ?>
</body>
</html>