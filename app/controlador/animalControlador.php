<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Animal.php';


//Controlar mostrar usuarios
$animalDAO = new Animal($conn); 

// Obtener la lista de usuarios
$animales = $animalDAO->listarAnimales();
$animalesAdoptados = $animalDAO->listarAnimalesAdoptados();
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
        isset($_FILES["foto-animal"]) && $_FILES["foto-animal"]["error"] == 0 

     ) {
        $nombre = $_POST["nombre"];
        $especie = $_POST["especie"];
        $sexo = $_POST["sexo"];
        $edad = $_POST["edad"];
        $tamano = $_POST["tamano"];
        $caracteristicas = $_POST["caracteristicas"];
        $razon = $_POST["razon"];
        
        // Ruta donde se almacenará la imagen
        $rutaImagen =   '../../uploads/' . basename($_FILES["foto-animal"]["name"]);
        $fotoAnimal = basename($_FILES["foto-animal"]["name"]);

        $animal = new Animal($conn);

        // Intentar agregar el usuario a la base de datos
        if ($animal->agregarAnimal($nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$fotoAnimal)
        && move_uploaded_file($_FILES["foto-animal"]["tmp_name"], $rutaImagen )) {

            echo '<div class="msgbddbien">Animal registrado correctamente</div>';
            header("location: ../vista/admin/adminAnimales.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar animal</div>';
            header("location: ../vista/admin/index.php");
        }
    } 
}

if (!empty($_POST["ActualizarAnimal"])) {
    
    if (
        strlen($_POST['nombre-editar']) >= 1 && 
        strlen($_POST['codigo-secreto']) >= 1 && 
        strlen($_POST['especie-editar']) >= 1 &&
        strlen($_POST['sexo-editar']) >= 1 &&
        strlen($_POST['edad-editar']) >= 1 &&
        strlen($_POST['tamano-editar']) >= 1 &&
        strlen($_POST['caracteristicas-editar']) >= 1 &&
        strlen($_POST['razon-editar']) >= 1 

     ) {
        $codigo = $_POST["codigo-secreto"];
        $nombre = $_POST["nombre-editar"];
        $especie = $_POST["especie-editar"];
        $sexo = $_POST["sexo-editar"];
        $edad = $_POST["edad-editar"];
        $tamano = $_POST["tamano-editar"];
        $caracteristicas = $_POST["caracteristicas-editar"];
        $razon = $_POST["razon-editar"];

                

        $animal = new Animal($conn);

        if(isset($_FILES["foto-editar"]) && $_FILES["foto-editar"]["error"] == 0){
            // Ruta donde se almacenará la imagen
            $rutaImagen =   '../../uploads/' . basename($_FILES["foto-editar"]["name"]);
            $foto = basename($_FILES["foto-editar"]["name"]);
            $resultado = $animal->ActualizarFotoAnimal($foto,$codigo);
        }else{
            $resultado = $animal->ActualizarAnimal($nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$codigo);
        }

        // Intentar actualizar los datos del animal
        if ($resultado) {

            echo '<div class="msgbddbien">Animal actualizado correctamente</div>';
            header("location: ../vista/admin/adminAnimales.php");

        } else {
            header("location: ../vista/admin/adminAnimales.php");
            //echo '<div class="msgbddnoreg">Error al actualizar animal</div>';
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

    if(!empty($filtro)){
        // Construir el mensaje de resultados para la búsqueda
        $mensajeResultados = "Resultados para la búsqueda: $filtro";
        $animales = $animalDAO->filtroAnimales($filtro);
        if(empty($animales)){
            echo '<div> No se encontraron resultados para la busqueda </div>';
        }
    }else{
        $animales = $animalDAO->listarAnimales();
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

if (isset($_POST["record"])) {
    $codigoAnimal = $_POST["record"];

    if ($animalDAO->eliminarAnimal($codigoAnimal)) {
        echo "Animal eliminado correctamente";
    } else {
        echo "Hubo un problema al eliminar el animal";
    }
} 

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    if (isset($_POST['codigo'])) {
        $codigo = $_POST['codigo'];

        // Mensaje de depuración para verificar el valor de $dataImageValue
        error_log("Valor de codigo recibido: " . $codigo);

        // Llama a la función listar un animal
        $animalDetalles = $animalDAO->listarUnAnimal($codigo);

        // Después de obtener los datos de la base de datos, devuelve los datos en formato JSON
        echo json_encode($animalDetalles);

    } else {
        echo "No se recibió el valor codigo.";
    }
}

?>

