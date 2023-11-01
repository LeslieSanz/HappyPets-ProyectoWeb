<?php

session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Reporte.php';

if (isset($_POST["enviarDatosForm"])) {

    if (
        strlen($_POST['animal']) >= 1 && 
        $_POST['animal'] != "ingreseEspecie" &&
        strlen($_POST['distrito']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['referencia']) >= 1 &&
        strlen($_POST['info-adicional']) >= 1 &&
        isset($_FILES["foto-animal"]) && $_FILES["foto-animal"]["error"] == 0 
    ) {

        
        
        $animal = $_POST["animal"];


        IF($animal == "otro"){
            $animal = $_POST['otroAnimal'];
        }


        $distrito = $_POST["distrito"];
        $direccion = $_POST["direccion"];
        $referencia = $_POST["referencia"];
        $infoAdicional = $_POST["info-adicional"];
        
        // Ruta donde se almacenará la imagen
        $rutaImagen =   '../../uploads/' . basename($_FILES["foto-animal"]["name"]);
        $fotoAnimal = basename($_FILES["foto-animal"]["name"]);

        // Crear una instancia de Reporte con los datos del formulario
        $reporte = new Reporte($conn);

        // Intentar agregar el reporte a la base de datos y mover la imagen del directorio temporal al directorio final
        if (move_uploaded_file($_FILES["foto-animal"]["tmp_name"], $rutaImagen ) && $reporte->agregarReporte($animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal)) {
            // Reporte registrado exitosamente, redirigir a una página princial que es index
            header("Location: ../../index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            header("Location: error.php");
            exit();
        }




    }else{
        echo"Error";
    }
}
?>
