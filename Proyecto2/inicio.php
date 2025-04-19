<?php
include ("base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include ("base/funciones.php"); // Incluye el archivo de funciones
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!--styles.css-->
    <link rel="preload" href="css\styles.css" as="style">
    <link href="css\styles.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Logo-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=connecting_airports" />
</head>
<body>
    <header>
        <?php include 'base/header.php'; ?>
    </header>    
        <?php include 'base/barra.php'; ?>
    <br>
    <section class="banner">
        <div class="contenido-banner">
            <h2 class="titulo">Seguridad en cada vuelo, tranquilidad en cada destino</h2> 
        </div> <!-- .contenido-banner --> 
    </section>
    <br><br>
    <main class="contenedor sombra">
        <h1 style="text-align: center;">¿Por qué usar AeroSeguro?</h1>
        <h2></h2>
        <div class="flex-posts">
           <div class="post">
               <h2>Seguridad garantizada</h2>
               <p>Nos aseguramos de que tu vuelo sea seguro en todos los aspectos, con opciones de protección adicional para que viajes tranquilo</p>
           </div>
           <div class="post">
               <h2>Proceso de compra sencillo</h2>
               <p>Nuestro sistema de reservas es fácil y rápido, permitiéndote comprar boletos en minutos desde cualquier dispositivo</p>
           </div>
           <div class="post">
               <h2>Garantía de reembolso</h2>
               <p>En caso de cambios inesperados, garantizamos tu reembolso o reprogramación sin complicaciones</p>
           </div>
           <div class="post">
               <h2>Atención al cliente especializada</h2>
               <p>Un equipo preparado para asesorarte y ayudarte con todos los detalles de tu viaje, desde la compra hasta tu llegada al destino</p>
           </div>
       </div> <!-- .flex-posts -->  
    </main>
    <hr class="separador">
    <!--Los boletos-->
    <h2 style="color:white; font-size: 4rem;">¡Descubre nuestras promociones!</h2>
    <div class="flex-posts">
        <!-- Aquí se muestran los primeros 4 resultados mas recientes-->
        <?php
            $query = "SELECT * FROM aviones ORDER BY idAvion DESC LIMIT 4";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    $lugarViaje = $row['lugarViaje'];
                    $descLugar = $row['descLugar'];
                    $precio = $row['precio'];
                    $numAsientos = $row['numAsientos'];
                    $imagen = $row['imagen'];
                    echo '<div class="post">';
                    echo '<h2>Vuelos a '.$lugarViaje.'</h2>';
                    echo '<hr>';
                    if ($imagen != "") {
                        echo '<img src="imagenes/'.$imagen.'" class="img-promo">';
                        echo '<hr>';
                    }
                    echo '<p style="text-align: left; margin-bottom: 0; font-size: 0.8rem;">Precio ida y vuelta desde</p>';
                    echo '<p style="text-align: left; margin-top: 0;">MXN<span>$'.$precio.'</span></p>';
                    echo '<input class="boton-promo" type="submit" value="Revisar">';
                    echo '</div>';

                }
            }
        ?>
    </div> <!-- .flex-posts -->
    <?php include 'base/footer.php'; ?>
</body>
</html>