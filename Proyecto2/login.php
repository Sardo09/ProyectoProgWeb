<?php
include("base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include("base/funciones.php"); // Incluye el archivo de funciones

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start(); // Inicia la sesión
    // Obtiene los datos del formulario
    $correo = $_POST['correo'];
    $pass = $_POST['contraseña'];
    // Verifica si el usuario y la contraseña son correctos
    $query = "SELECT * FROM usuario WHERE correo='$correo' AND contraseña='$pass' limit 1";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result); // Obtiene los datos del usuario
        $_SESSION['idUsuario'] = $user_data['idUsuario']; // Guarda el nombre de usuario en la sesión
        $_SESSION['tipoUsuario'] = $user_data['tipoUsuario']; // Guarda el tipo de usuario en la sesión
        if($user_data['tipoUsuario'] == 1) {
            //si es admin, redirige a la página de inicioAdmin.php
            header("Location: admin/inicioAdmin.php");
        } else {
            //si es usuario normal, redirige a la página de inicio.php
            header("Location: inicio.php"); 
        }
        
    } else {
        echo "<script>alert('Correo o contraseña incorrectos');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic  e-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
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
    <h2> Inicio de sesión </h2>
    <section class="formCorreo">
    <form method="POST" class="formCorreo">
        <fieldset>
            <div class="div-registro">
                <div class="camposRegistro">
                    <label>Correo</label>
                    <input class="input-text" type="email" placeholder="Correo electrónico" id="correo" name="correo" required>
                </div>
       
                <div class="camposRegistro">
                    <label>Contraseña</label>
                    <input class="input-text" type="password" placeholder="Tu Contraseña" id="contraseña" name="contraseña" required>
                </div>
                <div class="campos-registro flex">
                    <input class="boton w-sm-100" type="submit" value="Login">
                </div>
            </div>
            
            
            <div class="alinear-derecha flex">
                <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
            </div>

        </fieldset>
    </form>
</section>
<?php include 'base/footer.php'; ?>
</body>

</html>
