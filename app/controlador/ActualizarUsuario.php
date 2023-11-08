<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';

if (isset($_POST["enviarDatosForm"])) {
   if (
        strlen($_POST['cod_usu']) >= 1 &&
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['celular']) >= 1 && 
        strlen($_POST['dni']) >= 1 && 
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['distrito']) >= 1 &&
        strlen($_POST['foto']) >= 1
        
    ) {
        $cod = $_POST["cod_usu"];
        $nombre = $_POST["nombre"];
        $email = $_POST["correo"];
        $celular = $_POST["celular"];
        $dni = $_POST["dni"];
        $edad = $_POST["edad"];
        $distrito = $_POST["distrito"];
        $foto = $_POST["foto"];

// Crear una instancia de Contacto con los datos del formulario
        $usuarioObj = new Usuario($conn);

        if ($usuarioObj->actualizarUsuario($cod, $nombre, $email, $celular, $dni, $edad, $distrito, $foto)) {
            header("Location: ../vista/UsuarioEdit.php");
            exit();
        } else {
            echo "Error al actualizar los datos por favor intentelo mais tarde.";
        }
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}

?>
