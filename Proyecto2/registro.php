<?php
include("base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include("base/funciones.php"); // Incluye el archivo de funciones

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pass = $_POST['contraseña'];

    // Verifica si el correo ya está registrado
    $query = "SELECT * FROM usuario WHERE correo='$correo' LIMIT 1";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        echo "<script>alert('El correo ya está registrado');</script>";
    }else{
        // Se agrega el nuevo usuario a la base de datos
        $query = "INSERT INTO usuario (nombre, telefono, correo, contraseña, tipoUsuario) VALUES ('$nombre', '$telefono', '$correo', '$pass', 0)";
        $result = mysqli_query($con, $query);
        echo "<script>alert('Se ha registrado exitosamente');</script>";
        header("Location: login.php"); // Redirige a la página de inicio de sesión
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preload" href="css\styles.css" as="style">
    <link href="css\styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=connecting_airports" />
</head>
<body>
    <header>
        <?php include 'base/header.php'; ?>
    </header>    
    <?php include 'base/barra.php'; ?>
    <br>
    <h2> Crea tu cuenta </h2>
    <section class="formCorreo">
    <form method="POST" class="formCorreo">
        <fieldset>
            <div class="div-registro">
               <div class="camposRegistro">
                   <label>Nombre</label>
                   <input class="input-text" type="text" placeholder="Tu Nombre" id="nombre" name="nombre" required>
               </div>

               <div class="camposRegistro">
                   <label>Teléfono</label>
                   <input class="input-text" type="number" placeholder="Tu Teléfono" id="telefono" name="telefono" required>
               </div>

               <div class="camposRegistro">
                   <label>Correo</label>
                   <input class="input-text" type="email" placeholder="Tu Email" id="correo" name="correo" required>
               </div>
       
               <div class="camposRegistro">
                   <label>Contraseña</label>
                   <input class="input-text" type="password" placeholder="Tu Contraseña" id="contraseña" name="contraseña" required>
               </div>
           </div>

           <div class="alinear-derecha flex">
               <input class="boton w-sm-100" type="submit" value="Crear Cuenta">
           </div>
           <div class="alinear-derecha flex">
                <p>¿Tienes cuenta? <a href="login.php">inicia sesión</a></p>
            </div>
       </fieldset>
    </form>
    </section>
    <?php include 'base/footer.php'; ?>
</body>
</html>