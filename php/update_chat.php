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
    $idChat = $_POST['idChat'];
    $nuevoContenido = $_POST['nuevoContenido'];
    $nuevoEstado = $_POST['nuevoEstado'];

    $sql = "UPDATE CHAT SET Contenido = '$nuevoContenido', Estado = '$nuevoEstado' WHERE id_Chat = $idChat";

    if ($conn->query($sql) === TRUE) {
        echo "Mensaje de chat actualizado con éxito";
    } else {
        echo "Error al actualizar el mensaje de chat: " . $conn->error;
    }
}

$conn->close();
?>