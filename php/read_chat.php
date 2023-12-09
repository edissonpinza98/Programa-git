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

$sql = "SELECT * FROM CHAT WHERE id_Chat = $idChat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID Chat: " . $row["id_Chat"]. "<br>";
        echo "ID Abogado: " . $row["id_Abogado"]. "<br>";
        echo "ID Persona: " . $row["id_Persona"]. "<br>";
        // ... otros campos
    }
} else {
    echo "No se encontró ningún mensaje de chat con ese ID Chat.";
}

$conn->close();
?>