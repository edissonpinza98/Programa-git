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
    $idPersona = $_POST['id'];
    $nuevosNombres = $_POST['nuevosNombres'];
    $nuevosApellidos = $_POST['nuevosApellidos'];

    $sql = "UPDATE PERSONA SET Nombres = '$nuevosNombres', Apellidos = '$nuevosApellidos' WHERE id_Persona = $idPersona";

    if ($conn->query($sql) === TRUE) {
        echo "Información de la persona actualizada con éxito";
    } else {
        echo "Error al actualizar la información de la persona: " . $conn->error;
    }
}

$conn->close();
?>