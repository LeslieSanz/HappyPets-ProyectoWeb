<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Reporte.php';

if (isset($_POST["enviarDatosForm"])) {

    if (
        strlen($_POST['nombres-apellidos']) >= 1 &&
        strlen($_POST['celular']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['animal']) >= 1 &&
        strlen($_POST['distrito']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['referencia']) >= 1 &&
        strlen($_POST['info-adicional']) >= 1 &&
        strlen($_POST['foto-animal']) >= 1
    ) {

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
        $reporte = new Reporte($conn);

        // Intentar agregar el reporte a la base de datos
        if ($reporte->agregarReporte($nombresApellidos, $celular, $correo, $animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal)) {
            // Reporte registrado exitosamente, redirigir a una página princial que es index
            header("Location: ../../index.php");
            exit();
        } else {
            // Error al registrar el reporte, redirigir a una página de error
            header("Location: error.php");
            exit();
        }
    }
}
?>
