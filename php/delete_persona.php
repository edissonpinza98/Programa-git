<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "ABODOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$idPersona = $_GET['id'];

$sql = "DELETE FROM PERSONA WHERE id_Persona = $idPersona";

if ($conn->query($sql) === TRUE) {
    echo "Persona eliminada con éxito";
} else {
    echo "Error al eliminar la persona: " . $conn->error;
}

$conn->close();
?>