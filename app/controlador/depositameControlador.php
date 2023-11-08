<!--animalControlador.php-->
<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Deposito.php';

if (isset($_POST["RegistrarTarjeta"])) {
    
    if (
        strlen($_POST['monto']) >= 1 && 
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['tarnum']) >= 1 
     ) {
        $monto = $_POST["monto"];
        $nombre = $_POST["nombre"];
        $tarnum = $_POST["tarnum"];
        
        $deposito = new Deposito($conn);

        // Intentar agregar el usuario a la base de datos
        if ($deposito->agregarDeposito($monto,$nombre,$tarnum)) {

            echo '<div class="msgbddbien">Pago procesado correctamente</div>';
            header("location: ../vista/donaciones.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar el pago</div>';
        }
    } 
} else {
    echo '<div class="msgbddnoreg">estoy cansado jefe</div>';
}


?>