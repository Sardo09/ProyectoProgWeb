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
    <main class="contenedor sombra">
        <h2 style="font-size: 1.4rem; margin-top: 0%;">¿Tienes problemas?</h2>
        <h2 style="margin-top: 0%;">¡Contactános!</h2>
        <div class="unCol gridCom">
            <section class="contacto">
                <a href="https://www.facebook.com/">
                <i class="fa-brands fa-facebook"></i><br>
                <p>Facebook</p>
                </a>
            </section>
            
            <section class="contacto">
                <a href="https://www.instagram.com/">
                    <i class="fa-brands fa-square-instagram"></i><br>
                <p>Instagram</p>
                </a>
            </section>

            <section class="contacto">
                <a href="https://x.com/home">
                <i class="fa-brands fa-x-twitter"></i><br>
                <p>X</p>
                </a>
            </section>

            <section class="contacto">
                <a href="https://www.youtube.com/">
                <i class="fa-brands fa-youtube"></i><br>
                <p>YouTube</p>
                </a>
            </section>

            <section class="contacto">
                <a href="https://www.line.me/">
                <i class="fa-brands fa-line"></i><br>
                <p>LINE</p>
                </a>
            </section>
        </div>
        <!--Contacto-->
        
        <h2>Envíanos un correo</h2>
            <section class="formCorreo">
            <form class="formCorreo">
                <fieldset>
                     <div class="div-contacto">
                        <div class="camposContacto">
                            <label>Nombre</label>
                            <input class="input-text" type="text" placeholder="Tu Nombre">
                        </div>

                        <div class="camposContacto">
                            <label>Teléfono</label>
                            <input class="input-text" type="tel" placeholder="Tu Teléfono">
                        </div>

                        <div class="camposContacto">
                            <label>Correo</label>
                            <input class="input-text" type="email" placeholder="Tu Email">
                        </div>
                
                        <div class="camposContacto">
                            <label>Mensaje</label>
                            <textarea class="input-text"></textarea>
                        </div>
                    </div> <!-- .div-contacto -->

                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" type="submit" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <?php include 'base/footer.php'; ?>
</body>
</html>