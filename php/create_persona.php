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
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $contacto = $_POST['contacto'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $pais = $_POST['pais'];

    $sql = "INSERT INTO PERSONA (Nombres, Apellidos, Contacto, Correo, Contraseña, Pais) 
            VALUES ('$nombres', '$apellidos', '$contacto', '$correo', '$contraseña', '$pais')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva persona agregada con éxito";
    } else {
        echo "Error al agregar la persona: " . $conn->error;
    }
}

$conn->close();
?>