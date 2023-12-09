<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_Abogado = $_POST["id_Abogado"];
    $id_Persona = $_POST["id_Persona"];
    $Codigo_Asesoria = $_POST["Codigo_Asesoria"];
    $Inicio_Fecha_y_Hora = $_POST["Inicio_Fecha_y_Hora"];
    $Fin_Fecha_y_Hora = $_POST["Fin_Fecha_y_Hora"];
    $Duracion = $_POST["Duracion"];
    $Costo_Total = $_POST["Costo_Total"];
    $Entidad_Bancaria = $_POST["Entidad_Bancaria"];
    
    // Realiza la inserción en la base de datos aquí (usando una consulta SQL con los datos proporcionados).
    // Asegúrate de manejar errores y excepciones adecuadamente.
}
?>
