<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login-HappyPets</title>
        <link rel="stylesheet" href="../../css/styleLogin.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
    </head>
    <body>
        <main>
        <div class="box-log">
            <span class="borderLine"></span>
            <form method="post" action="">
                <h2>Iniciar sesión</h2>
                <?php
                include("../config/database.php");
                include("../controlador/sesionControlador.php")
                ?>
                <div class="inputBox">
                    <input id="usuario" type="text" required="required" name="usuario">
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input id="password" type="password" required="required" name="password">
                    <span>Contraseña</span><div class="bx bx-show-alt"></div>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Recordar contraseña</a>
                    <a href="registro.php">Registrarse</a>
                </div>
                <input name="btningresar" class="btn" type="submit" value="Login">
            </form>
        </div>
        </main>
        <script src="../../js/registro.js"></script>
    </body>
</html>
