<?php
// Configuración de seguridad para sesiones
ini_set('session.cookie_secure', 1); // Solo enviar cookies por HTTPS
ini_set('session.cookie_httponly', 1); // Bloquear acceso vía JavaScript
ini_set('session.use_strict_mode', 1); // Modo estricto para evitar secuestros de sesión

session_set_cookie_params([
    'lifetime' => 3600, // Sesión expira en 1 hora
    'path' => '/',
    'domain' => '', // Ajustar según el dominio si es necesario
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();

// Regenerar el ID de sesión si es una nueva sesión
if (!isset($_SESSION['initiated'])) {
    session_regenerate_id(true);
    $_SESSION['initiated'] = true;
}

// Configuración de conexión a MySQL
$host = 'agencia_db'; // Nombre del servicio en Docker
$dbname = 'AGENCIA';
$user = 'usuario';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
