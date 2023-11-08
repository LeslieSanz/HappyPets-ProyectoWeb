<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirigir al usuario a la página nosotros
header("location: ../../index.php");

// Eliminar la cookie
setcookie("cod_usu", "", time() - 3600, "/");

// Destruir la sesión
session_destroy();

?>
