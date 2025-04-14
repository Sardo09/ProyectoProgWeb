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
    <!--Promociones-->
    <h2 style="color:white; font-size: 4rem;">¡Descubre nuestras promociones!</h2>
    <div class="flex-posts">
        <div class="post">
            <h2>Vuelos a Tamagandapio</h2>
            <hr>
            <img src="imagenes/tamagandapio-promo.png" class="img-promo">
            <hr>
            <p style="text-align: left; margin-bottom: 0; font-size: 0.8rem;">Precio ida y vuelta desde</p>
            <p style="text-align: left; margin-top: 0;">MXN<span>$1,708</span></p>
            <input class="boton-promo" type="submit" value="Revisar">
        </div>
        <div class="post">
            <h2>Vuelos a Tamagandapio</h2>
            <hr>
            <img src="imagenes/tamagandapio-promo.png" class="img-promo">
            <hr>
            <p style="text-align: left; margin-bottom: 0; font-size: 0.8rem;">Precio ida y vuelta desde</p>
            <p style="text-align: left; margin-top: 0;">MXN<span>$1,708</span></p>
            <input class="boton-promo" type="submit" value="Revisar">
        </div>
        <div class="post">
            <h2>Vuelos a Tamagandapio</h2>
            <hr>
            <img src="imagenes/tamagandapio-promo.png" class="img-promo">
            <hr>
            <p style="text-align: left; margin-bottom: 0; font-size: 0.8rem;">Precio ida y vuelta desde</p>
            <p style="text-align: left; margin-top: 0;">MXN<span>$1,708</span></p>
            <input class="boton-promo" type="submit" value="Revisar">
        </div>
        <div class="post">
            <h2>Vuelos a Tamagandapio</h2>
            <hr>
            <img src="imagenes/tamagandapio-promo.png" class="img-promo">
            <hr>
            <p style="text-align: left; margin-bottom: 0; font-size: 0.8rem;">Precio ida y vuelta desde</p>
            <p style="text-align: left; margin-top: 0;">MXN<span>$1,708</span></p>
            <input class="boton-promo" type="submit" value="Revisar">
        </div>
    </div> <!-- .flex-posts -->
    <?php include 'base/footer.php'; ?>
</body>
</html>