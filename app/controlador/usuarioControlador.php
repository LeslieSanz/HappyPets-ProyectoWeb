<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';

if (!empty($_POST["registro"])) {
    if (empty($_POST["usuario"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["repassword"])) {
        echo '<div class="msgbddnoreg">Uno de los campos está vacío</div>';
    } else {
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        // Crear una instancia de Usuario con la conexión a la base de datos
        $usuarioObj = new Usuario($conn);

        // Intentar agregar el usuario a la base de datos
        if ($usuarioObj->agregarUsuario($usuario, $email, $password, $repassword)) {
            echo '<div class="msgbddbien">Usuario registrado correctamente</div>';
            header("location: ../../index.php");
        } else {
            echo '<div class="msgbddnoreg">Error al registrar usuario</div>';
        }
    }
}



//Controla el inicio de sesion
session_start();
if (!empty($_POST["usuario"])) {
    if (empty($_POST["usuario"]) or empty($_POST["password"])) {
        echo "Los campos están vacíos";
    } else {
        $usuario = $_POST["usuario"];
        $pass = $_POST["password"];

        // Crear una instancia de Usuario con la conexión a la base de datos
        $usuarioObj = new Usuario($conn);

        // Validar el inicio de sesión
        $datosUsuario = $usuarioObj->validarLogin($usuario, $pass);

        if ($datosUsuario) {
            $_SESSION["usuario"] = $datosUsuario->usuario;
            $_SESSION["email"] = $datosUsuario->email;
            $_SESSION["password"] = $datosUsuario->password;
            header("location: index_log.php");
        } else {
            echo '<div>Acceso denegado</div>';
        }
    }
}

?>
