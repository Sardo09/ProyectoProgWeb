
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
    
    <section class="search-container">
        <div class="search-bar">
          <label for="origen">Origen:</label>
          <input type="text" id="origen" placeholder="Ciudad de origen">
        </div>
        <div class="search-bar">
          <label for="destino">Destino:</label>
          <input type="text" id="destino" placeholder="Ciudad de destino">
        </div>
        <div class="search-bar">
          <label for="fecha">Fecha de salida:</label>
          <input type="date" id="fecha">
        </div>
        <button type="submit" class="search-button">Buscar</button>
      </section>
    
      <h2>Vuelos Disponibles</h2>

      <section class="flight-list">
        
        <div class="flight-card">
          
          <h3>Vuelo 1: Madrid - Barcelona</h3>
          <p><strong>Aerolínea:</strong> Iberia</p>
          <p><strong>Fecha de salida:</strong> 20 de abril, 2025</p>
          <p><strong>Precio:</strong> $120 USD</p>
          <button class="book-button">Reservar Ahora</button>
        </div>
    
        <div class="flight-card"
            
            >
          <h3>Vuelo 2: México - Cancún</h3>
          <p><strong>Aerolínea:</strong> Aeroméxico</p>
          <p><strong>Fecha de salida:</strong> 22 de abril, 2025</p>
          <p><strong>Precio:</strong> $150 USD</p>
          <button class="book-button">Reservar Ahora</button>
        </div>
    
        <div class="flight-card"
        >
          <h3>Vuelo 3: Buenos Aires - Río de Janeiro</h3>
          <p><strong>Aerolínea:</strong> LATAM</p>
          <p><strong>Fecha de salida:</strong> 25 de abril, 2025</p>
          <p><strong>Precio:</strong> $200 USD</p>
          <button class="book-button">Reservar Ahora</button>
        </div>
      </section>
      <?php include 'base/footer.php'; ?>
</body>
</html>