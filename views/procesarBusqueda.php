<?php
// views/procesarBusqueda.php

include '../config.php'; // Incluir configuración de sesiones
include '../includes/FiltroViaje.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hotel = $_POST['hotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fechaViaje = $_POST['fechaViaje'];
    $duracion = $_POST['duracion'];

    // Instanciar la clase FiltroViaje
    $filtro = new FiltroViaje($hotel, $ciudad, $pais, $fechaViaje, $duracion);
    // Aquí podrías almacenar en la sesión los criterios de búsqueda si es necesario, por ejemplo:
    $_SESSION['ultimaBusqueda'] = [
        'hotel' => $hotel,
        'ciudad' => $ciudad,
        'pais' => $pais,
        'fechaViaje' => $fechaViaje,
        'duracion' => $duracion
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de la Búsqueda</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h2>Resultados de la Búsqueda</h2>
    <div class="resultado">
        <p><strong>Hotel:</strong> <?php echo htmlspecialchars($filtro->hotel); ?></p>
        <p><strong>Ciudad:</strong> <?php echo htmlspecialchars($filtro->ciudad); ?></p>
        <p><strong>País:</strong> <?php echo htmlspecialchars($filtro->pais); ?></p>
        <p><strong>Fecha de Viaje:</strong> <?php echo htmlspecialchars($filtro->fechaViaje); ?></p>
        <p><strong>Duración:</strong> <?php echo htmlspecialchars($filtro->duracion); ?> días</p>
    </div>
</body>
</html>
<?php
} else {
    echo "No se han recibido datos para procesar.";
}
?>
