<?php
session_start(); // Inicia la sesión
?>
<!--Kit para iconos de redes sociales-->
<script src="https://kit.fontawesome.com/a68e3d92d6.js" crossorigin="anonymous"></script>
<table class="log">
    <tr>
        <td style="width: 2%;"></td>
        <td>
            <span class="material-symbols-outlined" style="font-size: 2.5rem;">
                connecting_airports
            </span>
        </td>
        <td style="width: 10%;"><h1 class="logo">AeroSeguro</h1></td>
        <td class="log" style="width: 70%; text-align: right;">
            <?php //codigo para el inicio de sesion y cerrar sesion
            if (isset($_SESSION['idUsuario'])) { // Verifica si el usuario ha iniciado sesión
                echo '<h2>Bienvenido '.nameLoggedIn($con).' </h2>';
            }
            ?>
        </td>
        <td class="log" style="width: 90%; text-align: right;">
            <?php //codigo para el inicio de sesion y cerrar sesion
            if (isset($_SESSION['idUsuario'])) { // Verifica si el usuario ha iniciado sesión
                echo '<h2><a class="log" href="../base/cerrarsesion.php">Cerrar Sesion</a></h2>';
            } else {
                echo '<h2><a class="log" href="login.php">Iniciar Sesion</a></h2>';
            }
            ?>
        </td>
    </tr>
</table>