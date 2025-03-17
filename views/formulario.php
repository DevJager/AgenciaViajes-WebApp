<?php
?>  <!DOCTYPE html>  <html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Intención de Viaje</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h2>Registro de Intención de Viaje</h2>
    <form action="procesarBusqueda.php" method="post">
        <label for="hotel">Nombre del Hotel:</label>
        <input type="text" id="hotel" name="hotel" required>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required>

        <label for="fechaViaje">Fecha de Viaje:</label>
        <input type="date" id="fechaViaje" name="fechaViaje" required>

        <label for="duracion">Duración del Viaje (días):</label>
        <input type="number" id="duracion" name="duracion" required>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>