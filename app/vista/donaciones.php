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
                echo '<li><a href="UsuarioEdit.php"> Bienvenido '.$_SESSION["usuario"].'</a></li>';
                echo '<li><a href="../../app/controlador/CierreSesion.php">Cerrar Sesion</a></li>';
            } else {
                echo '<li><a href="login.php">Iniciar sesión</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>


    <!-- PARTE DEL BANNNER-->

    <section class="section-banner">
        <h1>
            Dona a los que más <br />
            lo necesitan
        </h1>

    </section>
    <section class="but">
        <p>Filtros:</p>
        <div class="container-filtro">
            <div class="boton-arriba">
                <button class="btn" type="button" onclick="mostrarTodos()">Mostrar Todos</button>
                <button class="btn" type="button" onclick="mostrarEconomico()">Apoyo Economico</button>
            </div>

            <div class="boton-abajo">
                <button class="btn" type="button" onclick="mostrarAlimentos()">Apoyo Alimentos</button>
                <button class="btn" type="button" onclick="mostrarArticulos()">Apoyo Articulos</button>
            </div>
        </div>
    </section>

    <section class=section-economico>
        <div class="container">
            <h2>Apoyo Economico</h2>

            <div class="container-section">

                <div class="card economico">

                    <div class="card-centro">
                        <figure class="img-pequeño">
                            <img id="card-transfe" src="../../img/dona-img/transfe.png">
                        </figure>

                        <div class="conte">
                            <div class="contenido">
                                <h3>Método tranferencia</h3>
                                <p>Tenemos estos 2 bancos disponibles para transferencias<br>
                                    BCP: 19378445869515744 <br> Scotiabank: 1874581217862</b></p>
                                <a href="depositame.php">Leer Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card economico">

                    <div class="card-centro">
                        <figure id="card-yape">
                            <img src="../../img/dona-img/yape.png">
                        </figure>

                        <div class="conte">
                            <div class="contenido">
                                <h3>Método yape</h3>
                                <p>Contamos con Yape, la billetera digital más utilizada en Perú esperando
                                    por tu donación</p>
                                    <a href="#" class="hero_cta">Yapea Aquí!!</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card economico">

                    <div class="card-centro">

                        <figure id="card-plin" class="img-pequeño">
                            <img src="../../img/dona-img/plin.png">
                        </figure>

                        <div class="conte">
                            <div class="contenido">
                                <h3>Método Plin</h3>
                                <p>Por último, pero no menos importante ¡Plin!, la segunda billetera
                                    digital más usada del Perú.</p>
                                <a href="#" class="abrir_plin">Plinea Aquí</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


        </div>
    </section>



    <section class=section-alimentos>
        <div class="container">
            <h2>Apoyo Alimentos</h2>
            <div class="container-section">

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
                        <a href="#" class="abrir_alimentos">Dona alimentos aquí</a>
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

            </div>
        </div>
    </section>




    <section class="section-articulos">
        <div class="container">
            <h2>Apoyo Articulos</h2>
            <div class="container-section">

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
                            <b>+51 963 029 680</b>
                        </p>
                        <a href="#" class="abrir_articulos">Leer Más</a>
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
                            2. Ropa y mantas: Mantas, suéteres y abrigos para mascotas pueden ser donados para ayudar a
                            mantener a las mascotas clientes y cómodas. <br>
                            3. Productos de aseo: Champús, cepillos, peines y otros productos de aseo pueden ayudar a
                            mantener a las mascotas limpias y saludables. <br>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--POPUP Yape-->
    <section class="modal ">
        <div class="modal_container">
            <img src="../../img/dona-img/YapeWalter.PNG" alt="">
            <a href="#" class="modal_close">Cerrar</a>
        </div>
    </section>

    <!--POPUP Plin-->
    <section class="modalplin">
        <div class="modal_containerP">
            <img src="../../img/dona-img/yapeqr.PNG" alt="">
            <a href="#" class="modal_closeP">Cerrar</a>
        </div>
    </section>

    <!--ModalFormulario Alimentos-->
    <section class="modalAlimentos">
        <div class="modal_containerAlimentos" >
            <form method="post" action="../controlador/depositameControlador.php" id="formulario-alimentos" class="formulario-alimentos" enctype="multipart/form-data"> 
            <div class="grupo">
                <label for="inputNombre">Nombres y apellidos</label>
                <input name="nombre" type="text" id="inputNombre" maxlength="30" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNumero">Número de contacto</label>
                <input name="numero" type="text" id="inputNumero" maxlength="11" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputDireccion">Direccion</label>
                <input name="direccion" type="text" id="inputDireccion" maxlength="32" autocomplete="off">
            </div>
            <div class="flexbox">
                <div class="grupo alimento">
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="tipoAlimento" id="selectAlimento">
                                <option disabled selected>Tipo de Alimento</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="tipoEdad" id="selectEdad">
                                <option disabled selected>Tipo por edad</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                            <select name="tipoMarca" id="selectMarca">
                                <option disabled selected>Marca</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grupo">
                <label for="inputPeso">Peso (kg)</label>
                <input name="peso" type="text" id="inputPeso" maxlength="19" autocomplete="off">
            </div>
            <button name="RegistrarAlimentos" type="submit" class="btn-enviar" form="formulario-alimentos">Enviar</button>
                <div class="regresar">
                <p>El recojo del articulo se realizará en los 5 días hábiles siguentes al de la fecha</p>
                     <a href="#" class="modal_closeAlimentos">Cerrar</a>
                </div>
            </form>
        </div>
    </section>

    <!--ModalFormulario Articulos-->
    <section class="modalArticulos">
        <div class="modal_containerArticulos" >
            <form method="post" action="../controlador/depositameControlador.php" id="formulario-articulos" class="formulario-articulos"> 
            <div class="grupo">
                <label for="inputNombre2">Nombres y apellidos</label>
                <input name="nombre2" type="text" id="inputNombre2" maxlength="30" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputNumero2">Número de contacto</label>
                <input name="numero2" type="text" id="inputNumero2" maxlength="11" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputDireccion2">Direccion</label>
                <input name="direccion2" type="text" id="inputDireccion2" maxlength="32" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputTipoArticulo">Tipo de articulo</label>
                <input name="tipoArticulo" type="text" id="inputTipoArticulo" maxlength="32" autocomplete="off">
            </div>
            <div class="grupo">
                <label for="inputDescripcion">Descripción del articulo</label>
                <input name="descripcion" type="text" id="inputDescripcion" maxlength="60" autocomplete="off">
            </div>
            <button name="RegistrarArticulos" type="submit" class="btn-enviar" form="formulario-articulos">Enviar</button>
                <div class="regresar">
                        <p>El recojo del articulo se realizará en los 5 días hábiles siguentes al de la fecha</p>
                     <a href="#" class="modal_closeArticulos">Cerrar</a>
                </div>
            </form>
        </div>
    </section>
    
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
                  <a href="https://twitter.com/pets_happy123" class="fa fa-x"></a>
                  <a href="https://www.youtube.com/@HappyPets-cf1ug/featured" class="fa fa-youtube"></a>
              </div>
          </div>
      </section>
      <section class="grupo-2">
          <small>&copy; 2023 <b>HappyPets</b> - Todos los Derechos Reservados.</small>
      </section>
  </footer>
  <script src="../../js/donaciones.js"></script>
  </body>
</html>
