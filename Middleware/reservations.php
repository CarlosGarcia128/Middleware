<?php
include('middleware.php'); // Incluir el middleware
include('db.php'); // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $guests = htmlspecialchars($_POST['guests']);

    // Insertar la reserva en la tabla reservations
    $sql = "INSERT INTO reservations (customer_name, reservation_date, reservation_time, guests) 
            VALUES (:name, :reservation_date, :reservation_time, :guests)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name,
        'reservation_date' => $date,
        'reservation_time' => $time,
        'guests' => $guests
    ]);

    $message = "¡Su reserva ha sido confirmada!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacer una Reserva</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Restaurante</h1>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="reservations.php">Reservar</a>
                <a href="admin.php">Administración</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="reservation-form">
            <h2>Reserva tu Mesa</h2>
            <form method="POST" action="">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="date">Fecha:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Hora:</label>
                <input type="time" id="time" name="time" required>

                <label for="guests">Número de invitados:</label>
                <input type="number" id="guests" name="guests" min="1" max="10" required>

                <button type="submit" class="button">Reservar</button>
            </form>

            <?php if (isset($message)): ?>
                <p class="success-message"><?php echo $message; ?></p>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restaurante. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
