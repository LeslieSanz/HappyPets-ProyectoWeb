<!--animalControlador.php-->
<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Animal.php';

//Controlar mostrar usuarios
$animalDAO = new Animal($conn); // Suponiendo que $conn es tu conexión a la base de datos

// Obtener la lista de usuarios
$animales = $animalDAO->listarAnimales();
$mensajeResultados='';
//var_dump($animales); //--> para verificar que el arreglo se llene

// if (isset($_POST["enviar"])) {
//     //echo"entro al primer if";
//     if ($_POST["tipo-animal"] == 'todos' && 
//         $_POST["sexo-animal"] == 'todos' && 
//         $_POST["tamano-animal"] == 'todos') {

//             $filtro = '';
//             //echo"entro al segundo if";

//     } else {
//         if ($_POST["tipo-animal"] != 'todos' && 
//             $_POST["sexo-animal"] == 'todos' && 
//             $_POST["tamano-animal"] == 'todos') {

//             $filtro = "WHERE especie = '".$_POST["tipo-animal"]."'";
//             //echo"entro al tercer if";
//         }

//         if ($_POST["tipo-animal"] != 'todos' && 
//             $_POST["sexo-animal"] != 'todos' && 
//             $_POST["tamano-animal"] == 'todos') {

//             $filtro = "WHERE especie = '".$_POST["tipo-animal"]."' AND sexo ='".$_POST["sexo-animal"]."'";
//             //echo"entro al  if";
//         }
//     }

//     $animales = $animalDAO->filtroAnimales($filtro);

//     if($animalDAO->filtroAnimales($filtro)){
//         // echo "$filtro";
//         // var_dump($animales);
//     }else{
//         echo "$filtro";
//         echo"Error";
//     }
// }

if (isset($_POST["enviar"])) {
    $filtro = '';

    $tipo_animal = $_POST["tipo-animal"];
    $sexo_animal = $_POST["sexo-animal"];
    $tamano_animal = $_POST["tamano-animal"];

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

    // Construir el mensaje de resultados para la búsqueda
    $mensajeResultados = "Resultados para la búsqueda: $filtro";

    $animales = $animalDAO->filtroAnimales($filtro);

    if (!empty($animales)) {
        // La consulta se realizó correctamente, puedes mostrar los resultados
    } else {
        echo "No se encontraron resultados para el filtro aplicado.";
    }
}


?>