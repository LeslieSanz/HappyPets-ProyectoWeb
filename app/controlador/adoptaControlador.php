<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';
require_once __DIR__ . '/../modelo/SolicitudAdopta.php';

//Controlar mostrar usuarios
$solicitudDAO = new SolicitudAdopta($conn); 

// Obtener la lista de usuarios
$solicitudes = $solicitudDAO->listarSolicitudes();


if (isset($_SESSION['usuario'])) {
    $usuario = new Usuario($conn);
    $cod = $_SESSION["cod_usu"];
    $usuario = $usuario->obtenerUsuarioPorCodUsu($cod); // Asigna el resultado a $usuario

    // Verifica si el usuario se obtuvo correctamente
    if ($usuario !== null) {
        // Depuración
       // var_dump($usuario); // Verifica la estructura y los valores de $usuario
    } else {
        echo "Usuario no encontrado";
    }
}


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

        $viv= $_POST["vivienda"];
        $acu = $_POST["acuerdo"];
        $nin = $_POST["ninos"];
        $ale = $_POST["alergias"];

        // Crear una instancia de Reporte con los datos del formulario
        $usuario = new Usuario($conn);
        $solicitud = new SolicitudAdopta($conn);
        $usuario->actualizarUsuario($cod, $nombre,$correo,$dni,$celular,$distrito);

        // Intentar agregar el reporte a la base de datos y mover la imagen del directorio temporal al directorio final
        if ($solicitud->agregarSolicitudAdopta($cod, $cod_ani,$cod_ani,$viv,$acu,$nin,$ale) ){
            header("Location: ../../index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            echo "Error al actualizar los datos del usuario. Por favor, inténtalo de nuevo más tarde.";
        }

    }else{
        echo"Naaaaaaaaaaaaada";
    }
}

//Para cambiar el estado de una solicitud a "pendiente (0)" o "adoptado (1)"
if (isset($_POST["record"])) {
    $codigoSolicitud = $_POST["record"];

    if ($solicitudDAO->modificarEstadoSolicitud($codigoSolicitud)) {
        echo "Solicitud actualizada, bien Leslie";
    } else {
        echo "Hubo un problema al actualizar";
    }
} 

?>
