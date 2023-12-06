<?php
session_start();
require_once __DIR__ . '/../controlador/usuarioControlador.php';
require_once __DIR__ . '/../controlador/ActualizarUsuario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pets</title>
    <link rel="stylesheet" href="../../css/styleEditUs.css" />
    <link rel="stylesheet"   href="../../css/header.css" /> 
    <link rel="stylesheet"   href="../../css/footer.css" />
    <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--CABECERA-->
    <header>
    <a href="../../index.php" class="logo">
        <img src="../../img/logos/logopets.jpeg" alt="logo de la empresa" class="logo-img">
        <h2 class="logo-nombre">Happy Pets</h2>
    </a>
    <input type="checkbox" id="toggle">
    <label for="toggle">&#9776;</label>

    <nav class="nav">
        <ul>
            <li><a href="nosotros.php">¿Quiénes somos?</a></li>
            <li><a href="blog.php"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
            <li><a href="#"><i class="fa-solid fa-paw"></i>Deja tu huella</a>
                <ul>
                    <li><a href="adopta.php">Adopta</a></li>
                    <li><a href="reporta.php">Reporta</a></li>
                    <li><a href="donaciones.php">Donaciones</a></li>
                </ul>
            </li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php

                if (isset($_SESSION["usuario"])) {
                    // Obtener el nombre de usuario
                    $nombreCompleto = $_SESSION["usuario"];
                
                    // Dividir el nombre en palabras
                    $nombre = explode(' ', $nombreCompleto);
                
                    // Limitar la cantidad de palabras a mostrar (por ejemplo, 6 palabras)
                    $nombreLimitado = implode(' ', array_slice($nombre, 0, 1));
                
                    echo '<li><a href="app/vista/UsuarioEdit.php"> Bienvenido ' . $nombreLimitado . '</a></li>';
                    echo '<li><a href="app/controlador/CierreSesion.php">Cerrar Sesión</a></li>';
                } else {
                    echo '<li><a href="app/vista/login.php">Iniciar sesión</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>
<main>
<h1 class="title"> Actualizar Perfil </h1>
<section class="update-profile-container">
   <form action="" method="post" enctype="multipart/form-data">
   <?php   
   if(isset($_SESSION["usuario"]))
   echo '<img src="../../uploads/'. $usuario['foto'] .'" alt="">';
   ?>
   <div class="flex">
         <div class="inputBox">
            <?php
            if (isset($_SESSION["usuario"]))
            echo '<span>Usuario : </span>';
            echo '<input type="text" name="nombre" required class="box" placeholder="Ingresar tu nombre" value="'. $_SESSION["usuario"] .'">';
            echo '<span>Email : </span>';
            echo '<input type="email" name="email" required class="box" placeholder="Ingresar tu email" value="'. $_SESSION['email'] .'">';
            echo '<span>Foto de perfil : </span>';
            echo '<input type="file" name="foto" class="box" accept="image/jpg, image/jpeg, image/png">';
            ?>
         </div>
         <div class="inputBox">
         <?php
            if (isset($_SESSION["usuario"]))
            echo'<input type="hidden" class= "box" name="codigo" value="'.$_SESSION['cod_usu'].'">';
            echo'<span>N° de Celular :</span>';
            echo'<input type="tel" class="box" name="telefono" value="'.$usuario['celular'].'" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required >';
            echo'<span>Dni :</span>';
            echo'<input type="text" class="box" name="dni" value="'. $usuario['dni'] .'" >';
            echo'<span>Distrito :</span>';
            echo'<input type="text" class="box" name="distrito" value="'.$usuario['distrito'].'" >';
            ?>
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="Actualizar" name="update" formaction="../controlador/ActualizarUsuario.php" class="btn">
      </div>
   </form>

</section>

    </main>
    <!--PIE DE PAGINA-->

    <footer class="pie-pagina">
        <section class="grupo-1">
            <div class="box">
                <figure>
                    <a href="../../index.php">
                        <img src="../../img/logos/logo-footer.jpg" alt="Logo de Happy Pets">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SERVICIOS</h2>
                <ul>
                    <li><a href="adopta.php">Adopta</a></li>
                    <li><a href="reporta.php">Reporta</a></li>
                    <li><a href="donaciones.php">Donaciones</a></li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>CONTACTO</h2>
                <ul>
                    <li>
                        <p><i class="fa-solid fa-phone"></i>+51 936 971 400</p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-envelope"></i>HappyPets2023Web@gmail.com</p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-map-pin"></i>Jr. Francisco de Toledo 248</p>
                    </li>
                </ul>
            </div>
            <div class="box">
                <h2>REDES SOCIALES</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=61551118926851" target="_blank"
                        class="fa fa-facebook"></a>
                    <a href="https://instagram.com/happypets2023web?igshid=NGVhN2U2NjQ0Yg==" target="_blank"
                        class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </section>
        <section class="grupo-2">
            <small>&copy; 2023 <b>HappyPets</b> - Todos los Derechos Reservados.</small>
        </section>
    </footer>
    
</body>
</html>
