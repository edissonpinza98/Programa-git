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

$sql = "SELECT * FROM ABOGADO WHERE id_Abogado = $idAbogado";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_Abogado"]. "<br>";
        echo "Nombres: " . $row["Nombres"]. "<br>";
        echo "Apellidos: " . $row["Apellidos"]. "<br>";
        // ... otros campos
    }
} else {
    echo "No se encontró ningún abogado con ese ID.";
}

$conn->close();
?>
