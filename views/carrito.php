<?php
// views/carrito.php

include '../config.php'; // Incluir la configuración de sesiones

// Inicializar el carrito en la sesión, si aún no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Procesar la adición de un paquete al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['agregar'])) {
        $paquete = trim($_POST['paquete']);
        if (!empty($paquete)) {
            $_SESSION['carrito'][] = $paquete;
            $mensaje = "Paquete '$paquete' agregado al carrito.";
        }
    }
    
    // Procesar la acción de vaciar el carrito
    if (isset($_POST['vaciar'])) {
        $_SESSION['carrito'] = array();
        $mensaje = "Carrito vaciado.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compra - Agencia de Viajes</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Carrito de Compra</h1>
    <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
    
    <form method="post" action="carrito.php">
        <label for="paquete">Nombre del Paquete Turístico:</label>
        <input type="text" id="paquete" name="paquete" required>
        <input type="submit" name="agregar" value="Agregar al carrito">
    </form>
    
    <h2>Elementos en el Carrito</h2>
    <?php if (!empty($_SESSION['carrito'])): ?>
        <ul>
            <?php foreach ($_SESSION['carrito'] as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay elementos en el carrito.</p>
    <?php endif; ?>
    
    <form method="post" action="carrito.php">
        <input type="submit" name="vaciar" value="Vaciar carrito">
    </form>
    
    <nav>
        <a href="../index.php">Regresar al Inicio</a>
    </nav>
</body>
</html>
