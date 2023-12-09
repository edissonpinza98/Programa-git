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
    $especializacion = $_POST['especializacion'];
    $descripcion = $_POST['descripcion'];
    $clasificacion = $_POST['clasificacion'];

    $sql = "INSERT INTO ABOGADO (Nombres, Apellidos, Contacto, Correo, Contraseña, Pais, Especializacion, Descripcion, Clasificacion) 
            VALUES ('$nombres', '$apellidos', '$contacto', '$correo', '$contraseña', '$pais', '$especializacion', '$descripcion', $clasificacion)";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo abogado agregado con éxito";
    } else {
        echo "Error al agregar el abogado: " . $conn->error;
    }
}

$conn->close();
?>
