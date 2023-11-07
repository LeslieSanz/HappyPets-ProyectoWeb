
<?php
if (isset($_POST["record"])) {
    $codigoAnimal = $_POST["record"];

    if ($animalDAO->eliminarAnimal($codigoAnimal)) {
        echo "Animal eliminado correctamente";
    } else {
        echo "Hubo un problema al eliminar el animal";
    }
} else {
    echo "Parámetro 'record' no encontrado en la solicitud";
}

?>