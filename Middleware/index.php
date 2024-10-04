<?php
include('middleware.php'); // Incluir el middleware
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante XYZ - Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <style>
    h2{
        color: black;
    }
    .p2{
        color: black;
    }
   </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Restaurante XYZ</h1>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="reservations.php">Reservar</a>
                <a href="admin.php">Administración</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <h2>Experiencia Gastronómica Inigualable</h2>
            <p class="p2">Descubre sabores exquisitos y un servicio excepcional.</p>
            <p class="p2">Realiza tu reservación.</p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restaurante. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
