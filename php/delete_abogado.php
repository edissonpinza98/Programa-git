<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "ABODOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$idAbogado = $_GET['id'];

$sql = "DELETE FROM ABOGADO WHERE id_Abogado = $idAbogado";

if ($conn->query($sql) === TRUE) {
    echo "Abogado eliminado con éxito";
} else {
    echo "Error al eliminar el abogado: " . $conn->error;
}

$conn->close();
?>