<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <?php 
        //verifica si el usuario ha iniciado sesión y el tipo de usuario
            if (isset($_SESSION['idUsuario'])) {
                $tipo = tipoLogged($con);
                if ($tipo == 1) {
                    echo '<a href="inicioAdmin.php">Inicio</a>';
                    echo '<a href="crearViaje.php">Crear Viaje</a>';
                } else {
                    echo '<a href="inicio.php">Inicio</a>';
                    echo '<a href="quienesSomos.php">Quienes somos</a>';
                    echo '<a href="catalogo.php">Catálogo</a>';
                    echo '<a href="contacto.php">Contacto</a>';
                }
            } else {
                echo '<a href="inicio.php">Inicio</a>';
                echo '<a href="quienesSomos.php">Quienes somos</a>';
                echo '<a href="catalogo.php">Catálogo</a>';
                echo '<a href="contacto.php">Contacto</a>';
            }
        ?>
    </nav>
</div>