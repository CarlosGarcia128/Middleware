<?php
include('middleware.php'); // Incluir el middleware
include('db.php'); // Conectar a la base de datos

// Obtener los registros de la tabla activity_logs
$sql = "SELECT * FROM activity_logs ORDER BY request_time DESC";
$stmt = $pdo->query($sql);
$logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ver Registros</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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
        <section>
            <center>
            <h2>Panel de Administración</h2>
            <h3>Registros de Actividad</h3>
            </center>
            <table>
                <thead>
                    <tr>
                        <th>Fecha y Hora</th>
                        <th>IP del Cliente</th>
                        <th>URL Solicitada</th>
                        <th>Método HTTP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($logs)): ?>
                        <?php foreach ($logs as $log): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($log['request_time']); ?></td>
                            <td><?php echo htmlspecialchars($log['ip_address']); ?></td>
                            <td><?php echo htmlspecialchars($log['url']); ?></td>
                            <td><?php echo htmlspecialchars($log['http_method']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No hay registros.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Restaurante. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
