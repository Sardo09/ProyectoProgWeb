<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Crear una cadena con los datos
    $datos = "Nombre: $nombre, Teléfono: $telefono, Correo: $correo, Contraseña: $contrasena\n";

    // Guardar los datos en un archivo de texto
    file_put_contents('datos.txt', $datos, FILE_APPEND);

    // Redirigir al menú principal
    header('Location: inicio.html');
    exit(); // Asegura que el script se detenga después de la redirección
}
?>