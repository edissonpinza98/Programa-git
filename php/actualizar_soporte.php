<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_soporte = $_POST['id_soporte'];
    $contenido = $_POST['contenido'];
    $calificacion = $_POST['calificacion'];

    // Conexión a la base de datos
    // Realizar la actualización en la tabla "SOPORTE"
    // Redirigir a una página después de la actualización
}
?>