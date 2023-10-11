<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Pets</title>
    <link rel="icon" href = "../img/logos/logopets.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/styleDona.css" />
    <link rel="stylesheet"   href="../css/header.css" />
    <link rel="stylesheet"   href="../css/footer.css" />
    <script
      src="https://kit.fontawesome.com/09bca36bc3.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
   <!--CABECERA-->
   <header>
        <a href="../php/index.php" class="logo">
            <img src="../img/logos/logopets.jpeg" alt="logo de la empresa" class="logo-img">
            <h2 class="logo-nombre">Happy Pets</h2>
        </a>
        <input type="checkbox" id="toggle">
        <label for="toggle">&#9776;</label>

        <nav class="nav">
            <ul>
                <li><a href="../php/nosotros.php">¿Quiénes somos?</a></li>
                <li><a href="../php/blog.php"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
                <li><a href="#"><i class="fa-solid fa-paw"></i>Deja tu huella</a>
                    <ul>
                        <li><a href="../php/adopta.php">Adopta</a></li>
                        <li><a href="../php/reporta.php">Reporta</a></li>
                        <li><a href="../php/donaciones.php">Donaciones</a>
                    </ul>
                </li>
                <li><a href="../php/contacto.php">Contacto</a></li>
                <li><a href="../php/login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
<!--SECCIÓN 1-->

    <section id="hero">
        <h1>Donemos</h1> 
        <h2>a quienes más lo necesitan</h2>     
    </section>
    <!--Sección 0.2-->
    <div class="contenedor">
      <h1>Tipos de donaciones</h1><br>
      <input href="#economico" type="radio" name="filtro" id="todo"
      checked>
      <label for="todo">Todo</label> <br>
      <input href="#economico" type="radio" name="filtro" id="economico">
      <label for="economico">Apoyo económico</label> <br>
      <input href="#alimentos" type="radio" name="filtro" id="alimentos" >
      <label for="alimentos">Apoyo con alimentos</label> <br>
      <input href="#articulos" type="radio" name="filtro" id="articulos" >
      <label for="articulos">Apoyo con articulos</label> <br> 
      <div id="donaciones">
        <!--ECONOMICOS-->
        <div class="economico" id="economico">
          <div class="title">
            <h1>Apoyo económico</h1>
          </div>
          <div class="servicios">
            <div class="card" style="height: 510px">
              <img
                src="../img/dona-img/transfe.png"
                style="width: 200px"
                alt="Logo de bcp"
              />
              <h2>Método de transferencia</h2>
              <p>Tenemos estos 2 bancos disponibles para transferencias</p>
              <p><b>BCP: 19378445869515744 --- Scotiabank: 1874581217862</b></p>           
            </div>
            <div class="card" style="height: 510px">
              <img
                src="../img/dona-img/yape.png"
                style="width: 200px"
                alt="QR de yape"
              />
              <h2>Método Yape</h2>
              <p>
                Tenemos Yape la billetera digital más utilizada en Perú esperadno
                por tu donación
              </p>
            </div>
            <div class="card" style="height: 510px">
              <img
                src="../img/dona-img/plin.png"
                style="width: 200px"
                alt="QR de plin"
              />
              <h2>Método Plin</h2>
              <p>
                Por último, pero no menos importante ¡Plin!, la segunda billetera
                digital más usada del Perú
              </p>          
            </div>
          </div>
        </div>
        <!--ALIMENTOS-->
        <div class="alimentos" id="alimentos">
          <div class="titulo">
            <h1>Apoyo alimenticio</h1>
          </div>
          <div class="servicios">
            <div class="card2">
              <img
                src="../img/dona-img/donaComida.jpg"
                style="width: 500px"
                alt="Imagen de comida"
              />
              <p>
                Aceptamos alimentos para mascotas, esta sería de gran ayuda para
                las mascotas que tenemos si no puedes ayudar adoptando o con
                dinero, este metodo siempre es importante para que nuestros
                animales puedan alimentarse. Para donar escribe al <b>+51 963 029 680</b>
              </p>
              
            </div>
          </div>
        </div>
        <!--ARTICULOS-->
        <div class="articulos" id="articulos">
          <div class="titulo">
            <h1>Apoyo con articulos</h1>
          </div>
          <div class="servicios">
            <div class="card2">
              <img
                src="../img/dona-img/Articulo.webp"
                style="width: 500px "
                alt="imagen de cama con perro"
              />
              <p>
                Cualquier tipo de objeto que pueda tener en su casa sin que los
                usen sus mascotas, vienen de gran ayuda para las mascotas que
                tenemos en el refugio. Entre los objetos a preferencia son: Camas,
                rascadores, platos de alimentos o juguetes. Para donar escribe al
                <b>+51 963 029 680</b>
              </p>
              
            </div>
          </div>
        </div>
      </div>
      </div>
  

  
    <!--PIE DE PAGINA-->

    <footer class="pie-pagina">
        <section class="grupo-1">
            <div class="box">
                <figure>
                    <a href="../php/index.php">
                        <img src="../img/logos/logo-footer.jpg" alt="Logo de Happy Pets">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SERVICIOS</h2>
                <ul>
                    <li><a href="../php/adopta.php">Adopta</a></li>
                    <li><a href="../php/reporta.php">Reporta</a></li>
                    <li><a href="../php/donaciones.php">Donaciones</a></li>
                    <li><a href="../php/blog.php">Blog</a></li>
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