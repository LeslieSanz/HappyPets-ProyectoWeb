<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Escríbenos.php';



if (isset($_POST["enviarDatosForm"])) {
    if (
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['telefono']) >= 1 && 
        strlen($_POST['asunto']) >= 1 && 
        strlen($_POST['mensaje']) >= 1 
    ) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $asunto= $_POST["asunto"];
        $mensaje = $_POST["mensaje"];


// Crear una instancia de Contacto con los datos del formulario
        $contacto = new Contacto($conn);

        if ($contacto->agregarContacto($nombre, $email, $telefono, $asunto, $mensaje)) {
            header("Location: ../../index.php");
            exit();
        } else {
            echo "Error al agregar el contacto. Por favor, inténtalo de nuevo más tarde.";
        }
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}

?>