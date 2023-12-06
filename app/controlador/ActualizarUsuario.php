<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';

if (isset($_POST["update"]))

    if (
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['telefono']) >= 1 && 
        strlen($_POST['dni']) >= 1 && 
        strlen($_POST['distrito']) >= 1
        
    ) {
        $cod = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $distrito = $_POST["distrito"];
        $dni = $_POST["dni"];

        $rutaImagen =   '../../uploads/' . basename($_FILES["foto"]["name"]);
        $fotoUsuario = basename($_FILES["foto"]["name"]);

        $usuarioObj = new Usuario($conn);

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaImagen ) && $usuarioObj->actualizarUsuarioConFoto($cod,$nombre,$email,$dni,$telefono,$distrito,$fotoUsuario)) {
            // Reporte registrado exitosamente, redirigir a una página princial que es index
            header("Location: ../../index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            $usuarioObj->actualizarUsuarioSinFoto($cod,$nombre,$email,$dni,$telefono,$distrito);
            header("Location: ../../index.php");
            exit();
        }

    }else{
        echo"Error";

}

?>
