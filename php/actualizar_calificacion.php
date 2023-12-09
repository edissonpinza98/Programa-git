<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_calificacion = $_POST['id_calificacion'];
    $contenido = $_POST['contenido'];
    $calificacion = $_POST['calificacion'];

    // Conexión a la base de datos
    // Realizar la actualización en la tabla "CALIFICACION"
    // Redirigir a una página después de la actualización
}
?>