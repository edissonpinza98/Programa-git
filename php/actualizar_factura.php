<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_factura = $_POST["id_factura"];
    $Costo_Total = $_POST["Costo_Total"];
    
    // Realiza una consulta SQL para actualizar el costo total de la factura.
    // Asegúrate de manejar errores y excepciones adecuadamente.
}
?>