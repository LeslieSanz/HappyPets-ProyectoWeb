<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Eliminar la cookie
setcookie("cod_usu", "", time() - 3600, "/");

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o a donde prefieras
header("location: ../vista/nosotros.php");
?>
