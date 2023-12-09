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

$sql = "SELECT * FROM PERSONA WHERE id_Persona = $idPersona";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_Persona"]. "<br>";
        echo "Nombres: " . $row["Nombres"]. "<br>";
        echo "Apellidos: " . $row["Apellidos"]. "<br>";
        // ... otros campos
    }
} else {
    echo "No se encontró ninguna persona con ese ID.";
}

$conn->close();
?>