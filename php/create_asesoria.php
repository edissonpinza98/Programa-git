<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "ABODOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAbogado = $_POST['idAbogado'];
    $idPersona = $_POST['idPersona'];
    $descripcion = $_POST['descripcion'];
    $inicioFechaHora = $_POST['inicioFechaHora'];
    $finFechaHora = $_POST['finFechaHora'];
    $duracion = $_POST['duracion'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO ASESORIA (id_Abogado, id_Persona, Descripcion, Inicio_Fecha_y_Hora, Fin_Fecha_y_Hora, Duracion, Estado) 
            VALUES ('$idAbogado', '$idPersona', '$descripcion', '$inicioFechaHora', '$finFechaHora', '$duracion', '$estado')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva asesoría agregada con éxito";
    } else {
        echo "Error al agregar la asesoría: " . $conn->error;
    }
}

$conn->close();
?>