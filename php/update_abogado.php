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
    $idAbogado = $_POST['id'];
    $nuevosNombres = $_POST['nuevosNombres'];
    $nuevosApellidos = $_POST['nuevosApellidos'];

    $sql = "UPDATE ABOGADO SET Nombres = '$nuevosNombres', Apellidos = '$nuevosApellidos' WHERE id_Abogado = $idAbogado";

    if ($conn->query($sql) === TRUE) {
        echo "Información del abogado actualizada con éxito";
    } else {
        echo "Error al actualizar la información del abogado: " . $conn->error;
    }
}

$conn->close();
?>