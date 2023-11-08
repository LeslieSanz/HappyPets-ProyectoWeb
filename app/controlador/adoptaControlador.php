<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';
require_once __DIR__ . '/../modelo/SolicitudAdopta.php';

//Controlar mostrar usuarios
$solicitudDAO = new SolicitudAdopta($conn); 

// Obtener la lista de usuarios
$solicitudes = $solicitudDAO->listarSolicitudes();

if (isset($_POST["procesar-solicitud"])) {

    if (
        strlen($_POST['codigo']) >= 1 && 
        strlen($_POST['codigoAni']) >= 1 && 
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['celular']) >= 1 && 
        strlen($_POST['dni']) >= 1 && 
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['distrito']) >= 1 &&
        strlen($_POST['foto']) >= 1
        
    ) {
        $cod = $_POST["codigo"];
        $cod_ani = $_POST["codigoAni"];
        $nombre = $_POST["nombre"];
        $email = $_POST["correo"];
        $celular = $_POST["celular"];
        $dni = $_POST["dni"];
        $edad = $_POST["edad"];
        $distrito = $_POST["distrito"];
        $foto = $_POST["foto"];

        // Crear una instancia de Reporte con los datos del formulario
        $usuario = new Usuario($conn);
        $solicitud = new SolicitudAdopta($conn);

        // Intentar agregar el reporte a la base de datos y mover la imagen del directorio temporal al directorio final
        if ($usuario->actualizarUsuario($cod, $nombre, $email, $celular, $dni, $edad, $distrito, $foto)
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
