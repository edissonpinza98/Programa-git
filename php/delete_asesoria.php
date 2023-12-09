<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "ABODOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$codigoAsesoria = $_GET['codigoAsesoria'];

$sql = "DELETE FROM ASESORIA WHERE Codigo_Asesoria = $codigoAsesoria";

if ($conn->query($sql) === TRUE) {
    echo "Asesoría eliminada con éxito";
} else {
    echo "Error al eliminar la asesoría: " . $conn->error;
}

$conn->close();
?>