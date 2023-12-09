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
    $idAbogado = $_POST['idAbogado'];
    $idPersona = $_POST['idPersona'];
    $codigoAsesoria = $_POST['codigoAsesoria'];
    $archivoAdjunto = $_POST['archivoAdjunto'];
    $contenido = $_POST['contenido'];
    $fechaHoraMensaje = $_POST['fechaHoraMensaje'];
    $estado = $_POST['estado'];
    $cantidadMensajesNoLeidos = $_POST['cantidadMensajesNoLeidos'];
    $cantidadMensajesLeidos = $_POST['cantidadMensajesLeidos'];

    $sql = "INSERT INTO CHAT (id_Abogado, id_Persona, Codigo_Asesoria, Archivo_Adjunto, Contenido, Fecha_y_Hora_Mensaje, Estado, Cantidad_Mensajes_no_leidos, Cantidad_Mensajes_leidos) 
            VALUES ('$idAbogado', '$idPersona', '$codigoAsesoria', '$archivoAdjunto', '$contenido', '$fechaHoraMensaje', '$estado', '$cantidadMensajesNoLeidos', '$cantidadMensajesLeidos')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo mensaje de chat agregado con éxito";
    } else {
        echo "Error al agregar el mensaje de chat: " . $conn->error;
    }
}

$conn->close();
?>