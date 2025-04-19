<?php
session_start(); // Inicia la sesión
session_destroy(); //destruye la sesion
header("Location: ../inicio.php"); //redirecciona a la pagina de compra
?>