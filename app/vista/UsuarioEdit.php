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
            session_start();
            if (isset($_SESSION["usuario"])) {
                echo '<li><a href="UsuarioEdit.php"> Bienvenido '.$_SESSION["usuario"].'</a></li>';
                echo '<li><a href="../../app/controlador/CierreSesion.php">Cerrar Sesion</a></li>';
            } else {
                echo '<li><a href="login.php">Iniciar sesión</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<main>
<h1 class="title"> Actualizar Perfil </h1>
<section class="update-profile-container">
   <form action="" method="post" enctype="multipart/form-data">
      <img src="../../uploads/5.jpg" alt="">
      <div class="flex">
         <div class="inputBox">
            <?php
            if (isset($_SESSION["usuario"]))
            echo '<span>Usuario : </span>';
            echo '<input type="text" name="name" required class="box" placeholder="Ingresar tu nombre" value="'. $_SESSION["usuario"] .'">';
            echo '<span>Email : </span>';
            echo '<input type="email" name="email" required class="box" placeholder="Ingresar tu email" value="'. $_SESSION['email'] .'">';
            echo '<span>Foto de perfil : </span>';
            echo '<input type="hidden" name="old_image" value="">';
            echo '<input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">';
            ?>
         </div>
         <div class="inputBox">
         <?php
            if (isset($_SESSION["usuario"]))
            echo'<input type="hidden" name="old_pass" value="'. $_SESSION['password'] .'">';
            echo'<span>Antigua contraseña :</span>';
            echo'<input type="password" class="box" name="previous_pass" placeholder="'. $_SESSION['password'] .'" >';
            echo'<span>Nueva contraseña :</span>';
            echo'<input type="password" class="box" name="new_pass" placeholder="Ingresar nueva contraseña" >';
            echo'<span>Confirmar contraseña :</span>';
            echo'<input type="password" class="box" name="confirm_pass" placeholder="Confirmar nueva contraseña" >';
            ?>
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="Actualizar" name="update" class="btn">
         <a href="admin_page.php" class="option-btn">Retroceder</a>
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
                    <a href="https://twitter.com/pets_happy123" class="fa fa-x"></a>
                    <a href="https://www.youtube.com/@HappyPets-cf1ug/featured" class="fa fa-youtube"></a>
                </div>
            </div>
        </section>
        <section class="grupo-2">
            <small>&copy; 2023 <b>HappyPets</b> - Todos los Derechos Reservados.</small>
        </section>
    </footer>
    
</body>
</html>
