<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "ABODOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$idChat = $_GET['idChat'];

$sql = "DELETE FROM CHAT WHERE id_Chat = $idChat";

if ($conn->query($sql) === TRUE) {
    echo "Mensaje de chat eliminado con éxito";
} else {
    echo "Error al eliminar el mensaje de chat: " . $conn->error;
}

$conn->close();
?>