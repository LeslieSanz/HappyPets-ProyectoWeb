<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Reporte.php';


//Controlar mostrar usuarios
$animal_reporteDAO = new Reporte($conn); // Suponiendo que $conn es tu conexión a la base de datos

// Obtener la lista de usuarios
$animales_reporte = $animal_reporteDAO->listarAnimalesReporta();

$lista_reporte = $animal_reporteDAO ->listarAnimalesReportaTodos();
$mensajeResultados='';

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    if (isset($_POST['foto'])) {
        $dataImageValue = $_POST['foto'];

        // Mensaje de depuración para verificar el valor de $dataImageValue
        error_log("Valor de dataImageValue recibido: " . $dataImageValue);


        // Crea una instancia de la clase AnimalReporteDAO
        $animal_unicoDAO = new Reporte($conn);

        // Llama a la función listarAnimalUnico con el parámetro dataImageValue
        $animalUnico = $animal_unicoDAO->listarAnimalUnico($dataImageValue);

        // Después de obtener los datos de la base de datos, devuelve los datos en formato JSON
        echo json_encode($animalUnico);

    } else {
        echo "No se recibió el valor dataImageValue.";
    }
}


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






if (isset($_POST["record"])) {
    $codigoAnimal = $_POST["record"];

    if ($animal_reporteDAO->eliminarAnimal($codigoAnimal)) {
        echo "Animal eliminado correctamente";
    } else {
        echo "Hubo un problema al eliminar el animal";
    }
} 





?>
