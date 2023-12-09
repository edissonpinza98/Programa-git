<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_Abogado = $_POST['id_Abogado'];
    $id_Persona = $_POST['id_Persona'];
    $contenido = $_POST['contenido'];
    $inicio_fecha_y_hora = date('Y-m-d H:i:s'); // Obtener la fecha y hora actual
    $calificacion = $_POST['calificacion'];

    // Conexión a la base de datos
    // Realizar la inserción en la tabla "SOPORTE"
    // Redirigir a una página después de la inserción
}
?>