<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';
require_once __DIR__ . '/../modelo/SolicitudAdopta.php';

if (isset($_POST["procesar-solicitud"])) {

    if (
        strlen($_POST['codigo']) >= 1 && 
        strlen($_POST['codigoAni']) >= 1 && 
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['dni']) >= 1 && 
        strlen($_POST['celular']) >= 1 && 
        strlen($_POST['distrito']) >= 1 
        
    ) {
        $cod = $_POST["codigo"];
        $cod_ani = $_POST["codigoAni"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $dni = $_POST["dni"];
        $celular = $_POST["celular"];
        $distrito = $_POST["distrito"];

        // Crear una instancia de Reporte con los datos del formulario
        $usuario = new Usuario($conn);
        $solicitud = new SolicitudAdopta($conn);

        // Intentar agregar el reporte a la base de datos y mover la imagen del directorio temporal al directorio final
        if ($usuario->actualizarUsuario($cod, $nombre,$correo,$dni,$celular,$distrito)
        && $solicitud->agregarSolicitudAdopta($cod, $cod_ani) ){
            header("Location: ../../index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            echo "Error al actualizar los datos del usuario. Por favor, inténtalo de nuevo más tarde.";
        }

    }else{
        echo"Error";
    }
}

?>