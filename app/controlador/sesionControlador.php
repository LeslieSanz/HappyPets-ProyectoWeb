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

        $passenc2=encriptar($pass,$clave);

        // Validar el inicio de sesión
        $datosUsuario = $usuarioObj->validarLogin($usuario, $passenc2);

        if ($datosUsuario) {
            $_SESSION["usuario"] = $datosUsuario->nombre;
            $_SESSION["email"] = $datosUsuario->email;
            $_SESSION["password"] = $datosUsuario->password;
            $_SESSION["cod_usu"] = $datosUsuario->cod_usu;
            $_SESSION["celular"] = $datosUsuario->celular;
            $_SESSION["dni"] = $datosUsuario->dni;
            $_SESSION["distrito"] = $datosUsuario->distrito;
            // Establecer una cookie que mantenga al usuario autenticado por un cierto tiempo
            $expira = time() + (30 * 24 * 60 * 60); // Caduca en 30 días
            setcookie("cod_usu", $datosUsuario->cod_usu, $expira, "/");
            
            header("location: ../../index.php");
        } else {
            echo '<div>Acceso denegado</div>';
        }
    }


}

//Controla si hay un logeo activo mediante cookies
if (isset($_COOKIE["cod_usu"]) && !isset($_SESSION["usuario"])) {
    $cod_usu = $_COOKIE["cod_usu"];

    // Crear una instancia de Usuario con la conexión a la base de datos
    $usuarioObj = new Usuario($conn);

    // Obtener los datos del usuario utilizando el $codusu
    $datosUsuario = $usuarioObj->obtenerUsuarioPorCodUsu($cod_usu);

    if ($datosUsuario) {
        $_SESSION["usuario"] = $datosUsuario->nombre;
        $_SESSION["email"] = $datosUsuario->email;
        $_SESSION["password"] = $datosUsuario->password;
        $_SESSION["cod_usu"] = $datosUsuario->cod_usu;
        $_SESSION["celular"] = $datosUsuario->celular;
        $_SESSION["dni"] = $datosUsuario->dni;
        $_SESSION["distrito"] = $datosUsuario->distrito;
    }
}<?php
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

        $passenc2=encriptar($pass,$clave);

        // Validar el inicio de sesión
        $datosUsuario = $usuarioObj->validarLogin($usuario, $passenc2);

        if ($datosUsuario) {
            $_SESSION["usuario"] = $datosUsuario->nombre;
            $_SESSION["email"] = $datosUsuario->email;
            $_SESSION["password"] = $datosUsuario->password;
            $_SESSION["cod_usu"] = $datosUsuario->cod_usu;
            $_SESSION["celular"] = $datosUsuario->celular;
            $_SESSION["dni"] = $datosUsuario->dni;
            $_SESSION["distrito"] = $datosUsuario->distrito;
            // Establecer una cookie que mantenga al usuario autenticado por un cierto tiempo
            $expira = time() + (30 * 24 * 60 * 60); // Caduca en 30 días
            setcookie("cod_usu", $datosUsuario->cod_usu, $expira, "/");
            
            header("location: ../../index.php");
        } else {
            echo '<div>Acceso denegado</div>';
        }
    }


}

//Controla si hay un logeo activo mediante cookies
if (isset($_COOKIE["cod_usu"]) && !isset($_SESSION["usuario"])) {
    $cod_usu = $_COOKIE["cod_usu"];

    // Crear una instancia de Usuario con la conexión a la base de datos
    $usuarioObj = new Usuario($conn);

    // Obtener los datos del usuario utilizando el $codusu
    $datosUsuario = $usuarioObj->obtenerUsuarioPorCodUsu($cod_usu);

    if ($datosUsuario) {
        $_SESSION["usuario"] = $datosUsuario->nombre;
        $_SESSION["email"] = $datosUsuario->email;
        $_SESSION["password"] = $datosUsuario->password;
        $_SESSION["cod_usu"] = $datosUsuario->cod_usu;
        $_SESSION["celular"] = $datosUsuario->celular;
        $_SESSION["dni"] = $datosUsuario->dni;
        $_SESSION["distrito"] = $datosUsuario->distrito;
    }
}
