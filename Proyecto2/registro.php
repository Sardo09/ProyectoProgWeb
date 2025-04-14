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
    <form action="procesar.php" method="POST" class="formCorreo">
        <fieldset>
            <div class="div-registro">
               <div class="camposRegistro">
                   <label>Nombre</label>
                   <input class="input-text" type="text" placeholder="Tu Nombre">
               </div>

               <div class="camposRegistro">
                   <label>Teléfono</label>
                   <input class="input-text" type="tel" placeholder="Tu Teléfono">
               </div>

               <div class="camposRegistro">
                   <label>Correo</label>
                   <input class="input-text" type="email" placeholder="Tu Email">
               </div>
       
               <div class="camposRegistro">
                   <label>Contraseña</label>
                   <input class="input-text" type="password" placeholder="Tu Contraseña">
               </div>
           </div>

           <div class="alinear-derecha flex">
               <input class="boton w-sm-100" type="submit" value="Crear Cuenta">
           </div>
       </fieldset>
    </form>
    </section>
    </main>
    <?php include 'base/footer.php'; ?>
</body>
</html>