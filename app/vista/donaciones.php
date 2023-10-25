<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Pets</title>
    <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/styleDona.css" />
    <link rel="stylesheet"   href="../../css/header.css" />
    <link rel="stylesheet"   href="../../css/footer.css" />
    <script src="../../js/donaciones.js"></script>
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
                echo '<li><a href="#"> Bienvenido '.$_SESSION["usuario"].'</a></li>';
            } else {
                echo '<li><a href="login.php">Iniciar sesión</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<section class="but">
  <button class="btn" type="button" onclick="mostrarTodos()">Mostrar Todos</button>
  <button class="btn" type="button" onclick="mostrarEconomico()">Apoyo Economico</button>
  <button class="btn" type="button" onclick="mostrarAlimentos()">Apoyo Alimentos</button>
  <button class="btn" type="button" onclick="mostrarArticulos()">Apoyo Articulos</button>
  </section>
  <section>
      <div class="container">
      <div class="card economico">
          <figure>
              <img src="../../img/dona-img/transfe.png">
          </figure>
          <div class="contenido">
              <h3>Método tranferencia</h3>
              <p>Tenemos estos 2 bancos disponibles para transferencias<br>     
                BCP: 19378445869515744 <br> Scotiabank: 1874581217862</b></p>
              <a href="#">Leer Más</a>
          </div>
      </div>
      <div class="card economico">
          <figure>
              <img src="../../img/dona-img/yape.png">
          </figure>
          <div class="contenido">
              <h3>Método yape</h3>
              <p>Contamos con Yape, la billetera digital más utilizada en Perú esperando
                por tu donación</p>
              <a href="#">Leer Más</a>
          </div>
      </div>
      <div class="card economico">
          <figure>
              <img src="../../img/dona-img/plin.png">
          </figure>
          <div class="contenido">
              <h3>Método Plin</h3>
              <p>Por último, pero no menos importante ¡Plin!, la segunda billetera
                digital más usada del Perú.</p>
              <a href="#">Leer Más</a>
          </div>
      </div>
  </div></section>
  <section><div class="container">
      <div class="card alimentos">
          <figure>
              <img src="../../img/dona-img/donaComida.jpg">
          </figure>
          <div class="contenido">
              <h3>Apoyo con alimentos</h3>
              <p>Aceptamos alimentos para mascotas, esta sería de gran ayuda para
                las mascotas que tenemos si no puedes ayudar adoptando o con
                dinero, este metodo siempre es importante para que nuestros
                animales puedan alimentarse. Para donar escribe al <b>+51 963 029 680</b>.</p>
              <a href="#">Leer Más</a>
          </div>
      </div>

      <div class="card alimentos">
        <figure>
            <img src="../../img/dona-img/alimentosDonaciones.PNG">
        </figure>
        <div class="contenido">
          <h3>Apoyo con alimentos</h3>
          <p>
            Algunos alimentos que se pueden donar son los siguientes: <br>
            1. Alimentos secos para perros y gatos. <br>
            2. Alimentos húmedos para perros y gatos. <br>
            3. Comida para cachorros o gatitos. <br> 
          </p>
        </div>
    </div>

  </div></section>
  <section><div class="container">
      <div class="card articulos">
          <figure>
              <img src="../../img/dona-img/donaArticulos.jpg">
          </figure>
          <div class="contenido">
              <h3>Apoyo con articulos</h3>
              <p>Cualquier tipo de objeto que pueda tener en su casa sin que los
                usen sus mascotas, vienen de gran ayuda para las mascotas que
                tenemos en el refugio. Entre los objetos a preferencia son: Camas,
                rascadores, platos de alimentos o juguetes. Para donar escribe al
                <b>+51 963 029 680</b></p>
              <a href="#">Leer Más</a>
          </div>
      </div>
      <div class="card articulos">
        <figure>
          <img src="../../img/dona-img/gatoArticulo.PNG">
      </figure>
        <div class="contenido">
            <h3>Apoyo con articulos</h3>
            <p>
                Algunos articulos que se pueden donar son los siguientes: <br>
                1. Juguetes: Como pelotas, cuerdas y juguetes interactivos. <br>
                2. Ropa y mantas: Mantas, suéteres y abrigos para mascotas pueden ser donados para ayudar a mantener a las mascotas clientes y cómodas. <br>
                3. Productos de aseo: Champús, cepillos, peines y otros productos de aseo pueden ayudar a mantener a las mascotas limpias y saludables. <br>
            </p>
        </div>
    </div>
  </div></section>
  
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
                      <p><i class="fa-solid fa-envelope"></i>HappyPets2023Web1.com</p>
                  </li>
                  <li>
                      <p><i class="fa-solid fa-map-pin"></i>Jr. Francisco de Toledo 248</p>
                  </li>
              </ul>
          </div>
          <div class="box">
              <h2>REDES SOCIALES</h2>
              <div class="red-social">
                  <a href="https://www.facebook.com/profile.php?id=61551118926851" target="_blank" class="fa fa-facebook"></a>
                  <a href="https://instagram.com/happypets2023web?igshid=NGVhN2U2NjQ0Yg==" target="_blank" class="fa fa-instagram"></a>
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
