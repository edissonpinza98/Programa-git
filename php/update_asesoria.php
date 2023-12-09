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
    $codigoAsesoria = $_POST['codigoAsesoria'];
    $nuevaDescripcion = $_POST['nuevaDescripcion'];
    $nuevoEstado = $_POST['nuevoEstado'];

    $sql = "UPDATE ASESORIA SET Descripcion = '$nuevaDescripcion', Estado = '$nuevoEstado' WHERE Codigo_Asesoria = $codigoAsesoria";

    if ($conn->query($sql) === TRUE) {
        echo "Información de la asesoría actualizada con éxito";
    } else {
        echo "Error al actualizar la información de la asesoría: " . $conn->error;
    }
}

$conn->close();
?>