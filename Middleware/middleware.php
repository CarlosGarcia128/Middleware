<?php
// middleware.php
include('db.php'); // Conectar a la base de datos

// Establecer la zona horaria a México
date_default_timezone_set('America/Mexico_City');

// Obtener información de la solicitud
$ip = $_SERVER['REMOTE_ADDR']; // Dirección IP del cliente
$url = $_SERVER['REQUEST_URI']; // URL solicitada
$method = $_SERVER['REQUEST_METHOD']; // Método HTTP
$date = date('Y-m-d H:i:s'); // Fecha y hora en formato adecuado

// Insertar la información en la tabla activity_logs
$sql = "INSERT INTO activity_logs (ip_address, url, http_method, request_time) VALUES (:ip, :url, :method, :request_time)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'ip' => $ip,
    'url' => $url,
    'method' => $method,
    'request_time' => $date
]);
?>
