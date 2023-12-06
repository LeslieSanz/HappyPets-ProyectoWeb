<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-HappyPets</title>
    <link rel="stylesheet" href="../../css/styleRegistro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
</head>
<body>
        <main>
        <div class="box-log">
            <span class="borderLine"></span>
            <form method="post">
                <h2>Registrarse</h2>
                <?php
                include("../controlador/usuarioControlador.php")
                ?>
                <div class="inputBox">
                    <input id="usuario" type="text" required="required" name="usuario">
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input id="email" type="email" required="required" name="email">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input id="password" type="password" required="required" name="password">
                    <span>Contraseña</span><div class="bx bx-show-alt"></div>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input id="repassword" type="password" required="required" name="repassword">
                    <span>Repetir Contraseña</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="login.php">Iniciar Sesión</a>
                </div>
                <input type="submit" value="Registrarse" name="registro">
            </form>
        </div>
        </main>
        <!-- Enlance que vincula con el js-->
        <script src="../../js/registro.js"></script>
            <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.querySelector("form");
            form.addEventListener("submit", function (event) {
                var password = document.getElementById("password").value;
                var repassword = document.getElementById("repassword").value;

                if (password !== repassword) {
                    alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
                    event.preventDefault(); // Evita que el formulario se envíe
                }
            });
        });
    </script>

</body>
</html>
