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

$sql = "SELECT * FROM ASESORIA WHERE Codigo_Asesoria = $codigoAsesoria";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Código Asesoría: " . $row["Codigo_Asesoria"]. "<br>";
        echo "ID Abogado: " . $row["id_Abogado"]. "<br>";
        echo "ID Persona: " . $row["id_Persona"]. "<br>";
        // ... otros campos
    }
} else {
    echo "No se encontró ninguna asesoría con ese Código Asesoría.";
}

$conn->close();
?>