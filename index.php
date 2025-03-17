<?php
// index.php

// Incluir la configuración de sesiones segura
include 'config.php';

// Incluir notificaciones (ya pueden depender de la sesión si fuera necesario)
include 'includes/notificaciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes - Inicio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Bienvenido a Nuestra Agencia de Viajes</h1>
    <p>Descubre nuestras ofertas especiales y reserva tu viaje ideal.</p>
    <nav>
        <a href="views/formulario.php">Buscar Viajes</a> |
        <a href="views/carrito.php">Ver Carrito</a>
    </nav>
</body>
</html>
