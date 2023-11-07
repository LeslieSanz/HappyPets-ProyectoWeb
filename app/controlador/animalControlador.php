<!--animalControlador.php-->
<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Animal.php';

//Controlar mostrar usuarios
$animalDAO = new Animal($conn); // Suponiendo que $conn es tu conexión a la base de datos

// Obtener la lista de usuarios
$animales = $animalDAO->listarAnimales();
$mensajeResultados='';


if (!empty($_POST["RegistrarAnimal"])) {
    
    if (
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['especie']) >= 1 &&
        strlen($_POST['sexo']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['tamano']) >= 1 &&
        strlen($_POST['caracteristicas']) >= 1 &&
        strlen($_POST['razon']) >= 1 &&
        isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0 

     ) {
        $nombre = $_POST["nombre"];
        $especie = $_POST["especie"];
        $sexo = $_POST["sexo"];
        $edad = $_POST["edad"];
        $tamano = $_POST["tamano"];
        $caracteristicas = $_POST["caracteristicas"];
        $razon = $_POST["razon"];
        
        // Ruta donde se almacenará la imagen
        $rutaImagen =   '../../uploads/' . basename($_FILES["foto"]["name"]);
        $foto = basename($_FILES["foto"]["name"]);

        $animal = new Animal($conn);

        // Intentar agregar el usuario a la base de datos
        if ($animal->agregarAnimal($nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$foto)
        && move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaImagen )) {

            echo '<div class="msgbddbien">Usuario registrado correctamente</div>';
            header("location: ../../index.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar animal</div>';
        }
    } 
}

if (isset($_POST["enviar"])) {
    $filtro = '';

    $tipo_animal = $_POST["tipo-animal"];
    $sexo_animal = $_POST["sexo-animal"];
    $tamano_animal = $_POST["tamano-animal"];
    $edad_animal = $_POST["edad-animal"];

    if ($tipo_animal != 'todos') {
        $filtro .= "especie = '$tipo_animal'";
    }

    if ($sexo_animal != 'todos') {
        if ($filtro != '') {
            $filtro .= " AND ";
        }
        $filtro .= "sexo = '$sexo_animal'";
    }

    if ($tamano_animal != 'todos') {
        if ($filtro != '') {
            $filtro .= " AND ";
        }
        $filtro .= "tamano = '$tamano_animal'";
    }

    if ($edad_animal != 'todos') {
        if ($filtro != '') {
            $filtro .= " AND ";
        }
        $filtro .= "edad = '$edad_animal'";
    }

    // Construir el mensaje de resultados para la búsqueda
    $mensajeResultados = "Resultados para la búsqueda: $filtro";

    $animales = $animalDAO->filtroAnimales($filtro);

    if (!empty($animales)) {
        // La consulta se realizó correctamente, puedes mostrar los resultados
    } else {
        echo '<div>No se encontraron resultados para la busqueda</div>';
    }
}

if (isset($_GET["codigo"])) { //Verifica que haya un codigo en la URL de animal_adopta
    // Guardar la parte del código que está en la URL de animal_adopta y almacenarla en una variable
    $codigoAnimal = $_GET["codigo"];
    //Buscar los datos del animal con ese codigo
    $animalDetalles = $animalDAO->listarUnAnimal($codigoAnimal);

    if (!empty($animalDetalles)) {
        // echo "Vamos bien: $codigoAnimal";
    } else {
        echo "No se encontró info para el animal con el código: $codigoAnimal";
    }
}





?>