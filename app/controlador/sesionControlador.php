<?php
session_start();
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Usuario.php';

//Controla el inicio de sesion
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
            $_SESSION["usuario"] = $datosUsuario->nombre;
            $_SESSION["email"] = $datosUsuario->email;
            $_SESSION["password"] = $datosUsuario->password;
            header("location: ../vista/index_log.php");
        } else {
            echo '<div>Acceso denegado</div>';
        }
    }
}