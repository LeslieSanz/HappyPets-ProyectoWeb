<!--usuarioControlador.php-->
<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';

//Controla el registro de usuarios
if (!empty($_POST["registro"])) {
    if (empty($_POST["usuario"]) or empty($_POST["email"]) or empty($_POST["password"])) {
        echo '<div class="msgbddnoreg">Uno de los campos está vacío</div>';
    } else {
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $tipo = "cli";

        // Crear una instancia de Usuario con la conexión a la base de datos
        $usuarioObj = new Usuario($conn);

        $passenc=encriptar($password,$clave);

        // Intentar agregar el usuario a la base de datos
        if ($usuarioObj->agregarUsuarioAct($usuario, $email, $passenc, $tipo)) {
            echo '<div class="msgbddbien">Usuario registrado correctamente</div>';
            header("location: ../../index.php");
        } else {
            echo '<div class="msgbddnoreg">Error al registrar usuario</div>';
        }
    }
}

//Controlar mostrar usuarios

$usuarioObj = new Usuario($conn); // Suponiendo que $conn es tu conexión a la base de datos

// Obtener la lista de usuarios

$usuarios = $usuarioObj->listarUsuarios();

//var_dump($usuarios); --> para verificar que el arreglo se llene


//var_dump($usuarios); --> para verificar que el arreglo se llene
if (isset($_SESSION['usuario'])) {
    $usuarioDAO = new Usuario($conn);
    $cod = $_SESSION["cod_usu"];
    $usuario = $usuarioDAO->obtenerUsuarioPorCodUsu($cod); // Asigna el resultado a $usuario

    // Verifica si el usuario se obtuvo correctamente
    if ($usuario !== null) {
        //Depuración
        //var_dump($usuario); // Verifica la estructura y los valores de $usuario
    } else {
        echo "Usuario no encontrado";
    }
}
?>