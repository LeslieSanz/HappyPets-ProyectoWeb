<?php

require_once __DIR__ . '/../modelo/reporte.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/reporteDAO.php';

if (isset($_POST["enviarDatosForm"])) {

    if(strlen($_POST['nombres-apellidos']) >= 1 &&
    strlen($_POST['celular']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['animal']) >= 1 &&
    strlen($_POST['distrito']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['referencia']) >= 1 &&
    strlen($_POST['info-adicional']) >= 1 &&
    strlen($_POST['foto-animal']) >= 1 ){ 

        $nombresApellidos = $_POST["nombres-apellidos"];
        $celular = $_POST["celular"];
        $correo = $_POST["correo"];
        $animal = $_POST["animal"];
        $distrito = $_POST["distrito"];
        $direccion = $_POST["direccion"];
        $referencia = $_POST["referencia"];
        $infoAdicional = $_POST["info-adicional"];
        $fotoAnimal = $_POST["foto-animal"];
        

        // Crear una instancia de Reporte con los datos del formulario
        $reporte = new Reporte($nombresApellidos, $celular, $correo, $animal, $distrito, $direccion, $referencia, $infoAdicional, $fotoAnimal);

        // Crear una instancia de ReporteDAO y agregar el reporte a la base de datos
        $reporteDAO = new ReporteDAO($conn);
        
        if ($reporteDAO->agregarReporte($reporte)) {
            // Reporte registrado exitosamente, redirigir a una página de éxito
            header("Location: ../vista/index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            header("Location: error.php");
            exit();
        }
    }
    
} 
?>
