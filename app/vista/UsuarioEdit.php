<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pets</title>
    <link rel="stylesheet" href="../../css/styleContacto.css" />
    <link rel="stylesheet"   href="../../css/header.css" /> 
    <link rel="stylesheet"   href="../../css/footer.css" />
    <script src="../../js/adopta.js"></script>
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
    <!-- Enlance que vincula con el js-->
    <script src="../../js/reporta.js"></script>
    
    <main>
    
    <div class="container">
      <div class="contact-form">
        <?php
            if (isset($_SESSION["usuario"])) {
                echo '<h2>Bienvenido '.$_SESSION["usuario"].'</h2>';
                echo '<form action="../controlador/ActualizarUsuario.php" method="post">';
                echo '<h3>
                En este pequeño espacio podrás modificar todas tus credenciales
              </h3>';
              echo '<p>
            <label for="nombre">Usuario</label>
            <input type="text" name="nombre" class="respuesta" placeholder="'.$_SESSION["usuario"].'" /></p>
          <p>
            <label for="email">Correo electronico</label>
            <input type="email" name="email" class="respuesta" placeholder="'.$_SESSION["email"].'" readonly = "readonly"/>
          </p>
          <p>
            <label for="celular">Número de celular</label>
            <input
              type="tel"
              name="celular"
              class="respuesta"
              pattern="[0-9]{3}[0-9]{3}[0-9]{3}"
              placeholder="'.$_SESSION["celular"].'"
              required
            />
          </p>
          <p>
            <label for="DNI">DNI</label>
            <input type="text" name="DNI" class="respuesta" placeholder="'.$_SESSION["dni"].'"/>
          </p>
          <p>
            <label for="Distrito">Distrito</label>
            <input type="text" name="Distrito" class="respuesta" placeholder="'.$_SESSION["distrito"].'"/>
          </p>
          <p>
            <label for="edad">Edad</label>
            <input type="text" name="edad" class="respuesta" placeholder="0"/>
          </p>
          <p>';
            }
            ?>
          <!--el id se usará para el javascript-->
                        <div class="container-fotos">
                            <div class="form-foto">
                                <input type="file" id="boton-file-usuario" 
                                    name="foto-animal"
                                    accept="image/*" onchange="mostrarImagen('usuario')"
                                    required>

                                <input type="button" value="Subir Foto del animal" class="form-file"
                                        onclick="document.getElementById('boton-file-usario').click()">
                            </div>
                            <div id="previsualizacion">
                                <p>Imagen previa:</p>
                                <img id="imagen-previa-usuario" src="../../../img/reporta-img/gato-gif.gif"
                                            alt="Vista previa de la imagen" required>
                                <p id="nombre-archivo-usuario">Nombre del archivo: <span></span></p>
                            </div>
                        </div>


            <button type="submit" 
                    name= "enviarDatosForm"
                    class="submit">Enviar</button>
          </p>

        </form>
        
      </div>
    </div>

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
