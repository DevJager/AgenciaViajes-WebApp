<?php

// Función para mostrar notificaciones emergentes
function mostrarNotificacion($mensaje)
{
    echo "<script type='text/javascript'>alert('$mensaje');</script>";
}

// Mostrar una notificación al cargar la página
mostrarNotificacion('¡Oferta especial! Descuentos en paquetes turísticos por tiempo limitado.');

