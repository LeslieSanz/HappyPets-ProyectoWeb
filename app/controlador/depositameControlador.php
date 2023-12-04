<!--animalControlador.php-->
<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Deposito.php';
$deposito = new Deposito($conn);
$listaDepositos = $deposito->listarDepositos();

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
}
if (isset($_POST["RegistrarAlimentos"])) {
  
    if (
        strlen($_POST['numero']) >= 1 && 
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['tipoAlimento']) >= 1 &&
        strlen($_POST['tipoEdad']) >= 1 &&
        strlen($_POST['tipoMarca']) >= 1 &&
        strlen($_POST['peso']) >= 1
     ) {
        $numero = $_POST["numero"];
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $tAlimento = $_POST["tipoAlimento"];
        $tEdad = $_POST["tipoEdad"];
        $tMarca = $_POST["tipoMarca"];
        $peso = $_POST["peso"];
        
        $deposito = new Deposito($conn);

        // Intentar agregar el usuario a la base de datos
        if ($deposito->agregarAlimento($numero,$nombre,$direccion,$tAlimento,$tEdad,$tMarca,$peso)) {

            echo '<div class="msgbddbien">donacion de alimentos correctamente</div>';
            header("location: ../vista/donaciones.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar la donacion de alimentos</div>';
            header("location: ../modelo/Deposito.php");
        }
    } 
} else {
    echo '<div class="msgbddnoreg">estoy cansado jefe</div>';
}

if (isset($_POST["RegistrarArticulos"])) {
  
    if (
        strlen($_POST['numero2']) >= 1 && 
        strlen($_POST['nombre2']) >= 1 &&
        strlen($_POST['direccion2']) >= 1 &&
        strlen($_POST['tipoArticulo']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 
     ) {
        $numero = $_POST["numero2"];
        $nombre = $_POST["nombre2"];
        $direccion = $_POST["direccion2"];
        $tArticulo = $_POST["tipoArticulo"];
        $descripcion = $_POST["descripcion"];
        
        $deposito = new Deposito($conn);

        // Intentar agregar el usuario a la base de datos
        if ($deposito->agregarArticulo($numero,$nombre,$direccion,$tArticulo,$descripcion)) {

            echo '<div class="msgbddbien">donacion de alimentos correctamente</div>';
            header("location: ../vista/donaciones.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar la donacion de alimentos</div>';
            header("location: ../modelo/Deposito.php");
        }
    } 
} else {
    echo '<div class="msgbddnoreg">estoy cansado jefe</div>';
}
    



?>