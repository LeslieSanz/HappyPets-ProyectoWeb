<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Pets</title>
    <link rel="stylesheet" href="../../css/styleContacto.css" />
    <link rel="stylesheet"   href="../../css/header.css" />
    <link rel="stylesheet"   href="../../css/footer.css" />
    <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
    <script
      src="https://kit.fontawesome.com/09bca36bc3.js"
      crossorigin="anonymous"
    ></script>
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
                    // Obtener el nombre de usuario
                    $nombreCompleto = $_SESSION["usuario"];
                
                    // Dividir el nombre en palabras
                    $nombre = explode(' ', $nombreCompleto);
                
                    // Limitar la cantidad de palabras a mostrar (por ejemplo, 6 palabras)
                    $nombreLimitado = implode(' ', array_slice($nombre, 0, 1));
                
                    echo '<li><a href="UsuarioEdit.php"> Bienvenido ' . $nombreLimitado . '</a></li>';
                    echo '<li><a href="../controlador/CierreSesion.php">Cerrar Sesión</a></li>';
                } else {
                    echo '<li><a href="login.php">Iniciar sesión</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>

    <div class="container">
      <div class="contact-form">
        <h2>Escríbenos</h2>
        <h3>
          Si tienes alguna sugerencia o pregunta, hacernos alguna donación o ser
          parte de nuestro equipo mandanos un mensaje!
        </h3>
        <form action="../controlador/ContactoControlador.php" method="post">
          <!--el id se usará para el javascript-->
          <p>
            <label for="nombre">Escribe tu nombre </label>
            <input type="text" name="nombre" class="respuesta" />
          </p>
          <p>
            <label for="email">Correo electronico</label>
            <input type="email" name="email" class="respuesta" />
          </p>
          <p>
            <label for="telefono">Número de celular</label>
            <input
              type="tel"
              name="telefono"
              class="respuesta"
              pattern="[0-9]{3}[0-9]{3}[0-9]{3}"
              required
            />
          </p>
          <p>
            <label for="asunto">Asunto/Motivo</label>
            <input type="text" name="asunto" class="respuesta" />
          </p>
          <p class="block">
            <!--para que este en una franja (block)-->
            <label for="mensaje">Mensaje</label>
            <textarea
              class="respuesta"
              name="mensaje"
              id="mensaje"
              cols="20"
              rows="10"
            ></textarea>
            <!-- el name no es necesario, porque está relacionado al codigo del servidor-->
          </p>
          <input class="btn"  type="submit"  name= "enviarDatosForm" onclick="return validar()"; value="Enviar">
          </input>
        </form>   
      </div>
    </div>
    
    <script src="../../js/Contacto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
