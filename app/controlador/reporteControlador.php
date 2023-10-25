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
        strlen($_POST['foto-animal']) >= 1
    ) {

        
        
        $animal = $_POST["animal"];


        IF($animal == "otro"){
            $animal = $_POST['otroAnimal'];
        }


        $distrito = $_POST["distrito"];
        $direccion = $_POST["direccion"];
        $referencia = $_POST["referencia"];
        $infoAdicional = $_POST["info-adicional"];
        $fotoAnimal = $_POST["foto-animal"];

        // Crear una instancia de Reporte con los datos del formulario
        $reporte = new Reporte($conn);

        // Intentar agregar el reporte a la base de datos
        if ($reporte->agregarReporte($animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal)) {
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
