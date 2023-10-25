<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog-HappyPets</title>
    <link rel="stylesheet" href="../../css/styleblog.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="icon" href="../../img/logos/logopets.png" type="image/x-icon" />
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

    <section id="hero">
      <h1>Blog</h1>
    </section>

    <!--post_filtro-->
    <div class="Container post-filtro">
      <span class="Elemento-filtro filtro-activo" data-filter="todos"
        >Todos</span
      >
      <span class="Elemento-filtro" data-filter="adopcion">Adopción</span>
      <span class="Elemento-filtro" data-filter="curiosidades"
        >Curiosidades</span
      >
      <span class="Elemento-filtro" data-filter="saludable"
        >Vida saludable</span
      >
      <span class="Elemento-filtro" data-filter="noticias">Noticias</span>
    </div>

    <!--publicaciones/posts-->
    <section class="post container">
      <!--publicacion 1-->
      <div class="post-box curiosidades">
        <img src="../../img/blog-img/post1.jpg" alt="" class="post-img" />
        <h2 class="category">Curiosidades</h2>
        <a
          href="https://elcomercio.pe/wuf/planeas-viajar-por-el-peru-con-tu-mascota-ten-esto-en-cuenta-noticia/"
          target="_blank"
          class="post-title"
        >
          ¿Planeas viajar por el Perú con tu mascota? ¡Ten esto en cuenta!
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Aquí te decimos qué debes tener en cuenta si planes realizar un viaje
          en avión en compañía de tu hijo de ‘cuatro patas’.
        </p>
        <!--Autor1-->
        <div class="perfil">
          <img src="../../img/blog-img/Adr.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Adrián Cisneros</span>
          <!--icono-->
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 2-->
      <div class="post-box noticias">
        <img src="../../img/blog-img/post2.jfif" alt="" class="post-img" />
        <h2 class="category">Noticias</h2>
        <a
          href="https://larepublica.pe/tendencias/2023/10/08/iquitos-perro-con-traje-de-gala-es-bendecido-por-sacerdote-durante-misa-ay-que-hermoso-firulays-tendencias-lrnd-ntb-314328"
          target="_blank"
          class="post-title"
        >
          Perro con traje de gala es bendecido por sacerdote durante misa en
          Iquitos: “Ay, qué hermoso firulais”
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          En un acto inusual, pero significativo, fue bendecido un perro durante
          una misa que se realizó en una iglesia de la ciudad de Iquitos, en la
          región de Loreto. Una mujer vistió a su mascota con traje de gala
        </p>
        <!--Autor2-->
        <div class="perfil">
          <img src="../../img/blog-img/Les.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Leslie Sanchez</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>

      <!--publicacion 3-->
      <div class="post-box saludable">
        <img src="../../img/blog-img/post3.PNG" alt="" class="post-img" />
        <h2 class="category">Vida saludable</h2>
        <a href="post-pagina.php" class="post-title">
          3 hábitos para tener una mascota sana y activa
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Cada animal, según su raza, tamaño y edad requiere de diferentes
          cuidados y rutinas que le ayudarán a garantizar una vida larga y
          saludable.
        </p>
        <!--Autor3-->
        <div class="perfil">
          <img src="../../img/blog-img/Dom.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Dominith Anton</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>

      <!--publicacion 4-->
      <div class="post-box curiosidades">
        <img src="../../img/blog-img/post4.jpg" alt="" class="post-img" />
        <h2 class="category">Curiosidades</h2>
        <a href="post-pagina.html" class="post-title"> El pelo de los gatos </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Si tuviésemos que indicar una cualidad común en todos los felinos, ya
          sean domésticos o salvajes, seguramente, cualquier persona pensaría en
          su elegancia; ese porte distinguido y distante, esa aura de respeto
          que hace que su presencia no pase desapercibida.
        </p>
        <!--Autor4-->
        <div class="perfil">
          <img src="../../img/blog-img/Adr.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Adrián Cisneros</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 5-->
      <div class="post-box noticias">
        <img src="../../img/blog-img/post5.jpg" alt="" class="post-img" />
        <h2 class="category">Noticias</h2>
        <a
          href="https://rpp.pe/ciencia/mas-ciencia/cientificos-determinan-la-mejor-forma-de-llamar-la-atencion-de-un-gato-noticia-1483196"
          target="_blank"
          class="post-title"
        >
          Científicos determinan la mejor forma de llamar la atención de un
          gato: no es ‘pspspspsp’
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          ¿Qué haces cuando vez un gato por la calle? Generalmente se le suele
          tocar la cabeza tiernamente o llamar por un típico “pspspsps”. Pero
          hay un método mucho más eficaz para llamar su atención.
        </p>
        <!--Autor5-->
        <div class="perfil">
          <img src="../../img/blog-img/Les.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Leslie Sanchez</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>

      <!--publicacion 6-->
      <div class="post-box saludable">
        <img src="../../img/blog-img/post6.jpg" alt="" class="post-img" />
        <h2 class="category">Vida saludable</h2>
        <a
          href="https://elcomercio.pe/vamos/consejos-de-viajes/viajar-con-mascota-los-mejores-destinos-en-el-peru-para-viajar-con-tu-perro-viajes-peru-mascotas-peru-destinos-en-el-peru-pet-friendly-consejos-destinos-noticia/"
          target="_blank"
          class="post-title"
        >
          Estos son los mejores destinos de Perú para viajar con tu perro
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Cada vez hay más hoteles y establecimientos en el Perú que son "pet
          friendly", sobre todo con nuestros amigos de cuatro patas: los perros.
          Existen diversos destinos para que los perros puedan disfrutar de la
          naturaleza y jugar en un espacio amplio.
        </p>
        <!--Autor6-->
        <div class="perfil">
          <img src="../../img/blog-img/Dom.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Dominith Anton</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 7-->
      <div class="post-box curiosidades">
        <img src="../../img/blog-img/post7.PNG" alt="" class="post-img" />
        <h2 class="category">Curiosidades</h2>
        <a
          href="https://www.santevet.es/articulo/alerta-frio-invierno-y-mascotas-como-protegerlos#:~:text=Evita%20los%20paseos%20muy%20largos,son%20muy%20sensibles%20al%20fr%C3%ADo."
          target="_blank"
          class="post-title"
        >
          ¡Alerta frío! Desmontamos 5 mitos para proteger a tu mascota este
          invierno
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          El invierno todavía no ha comenzado y ya hemos sufrido una ola de frío
          importante, batiendo récords de temperaturas negativas. Al igual que
          las personas, los animales de compañía sufren con el cambio de
          estación: las temperaturas gélidas, el cambio horario, la reducción de
          horas de luz solar, etc. Nuestros perros y gatos necesitan que
          adoptemos por ellos una serie de medidas y algunas precauciones para
          evitar riesgos y enfermedades.
        </p>
        <!--Autor7-->
        <div class="perfil">
          <img src="../../img/blog-img/Adr.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Adrián Cisneros</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 8-->
      <div class="post-box adopcion">
        <img src="../../img/blog-img/post8.jpg" alt="" class="post-img" />
        <h2 class="category">Adopción</h2>
        <a
          href="https://www.fundacion-affinity.org/perros-gatos-y-personas/busco-un-animal-de-compania/la-adopcion-una-nueva-oportunidad-para-los"
          target="_blank"
          class="post-title"
        >
          La adopción, una nueva oportunidad para los perros y gatos abandonados
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          La adopción, una nueva oportunidad para los perros y gatos
          abandonados. Los adoptantes han manifestado que su motivo principal
          para hacerlo fue su sensibilización con el problema (38%) y para
          colaborar con la protectora (23%). También se han decidido a adoptar
          por recomendaciones, porque es una vía más económica y porque los
          animales están en mejores condiciones (12% para cada una de estas
          razones)
        </p>
        <!--Autor8-->
        <div class="perfil">
          <img src="../../img/blog-img/Les.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Leslie Sanchez</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>

      <!--publicacion 9-->
      <div class="post-box saludable">
        <img src="../../img/blog-img/post9.PNG" alt="" class="post-img" />
        <h2 class="category">Vida saludable</h2>
        <a
          href="https://www.businessinsider.es/5-cosas-ayudaran-perro-vivir-vida-larga-saludable-922821"
          target="_blank"
          class="post-title"
        >
          5 maneras de hacer que tu perro tenga una vida más larga y saludable,
          según una experta en animales
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Tu compañero fiel, peludo y leal te proporciona muchos buenos momentos
          y un cariño incondicional. Por lo que estás encantado de tenerle. Pero
          desgraciadamente su longevidad es algo escasa en términos humanos.
        </p>
        <!--Autor9-->
        <div class="perfil">
          <img src="../../img/blog-img/Cristina.jfif" alt="" class="perfil-img" />
          <span class="perfil-nombre">Cristina Fernández</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 10-->
      <div class="post-box adopcion">
        <img src="../../img/blog-img/post10.jfif" alt="" class="post-img" />
        <h2 class="category">Adopción</h2>
        <a
          href="https://elcomercio.pe/respuestas/cuando/dia-internacional-del-animal-sin-hogar-cuando-se-conmemora-y-por-que-es-importante-esta-fecha-efemerides-revtli-tdex-noticia/"
          target="_blank"
          class="post-title"
        >
          Día Internacional del Animal sin Hogar: ¿cuándo se conmemora y por qué
          es importante esta fecha?
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          Con el principal objetivo de brindar una solución al problema de la
          sobrepoblación de animales que se encuentran en la calle, desde 1982
          se celebra el Día Internacional del Animal sin Hogar promovido por la
          Sociedad Internacional de los Derechos de los Animales, conocida más
          como ISAR por sus siglas en inglés.
        </p>
        <!--Autor10-->
        <div class="perfil">
          <img src="../../img/blog-img/Ant.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Anthony Peña</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
      <!--publicacion 11-->
      <div class="post-box noticias">
        <img src="../../img/blog-img/post11.PNG" alt="" class="post-img" />
        <h2 class="category">Noticias</h2>
        <a
          href="https://elcomercio.pe/respuestas/la-historia-de-coco-el-perro-que-es-tratado-en-un-refugio-por-abstinencia-de-alcohol-historias-ec-revtli-noticia/"
          target="_blank"
          class="post-title"
        >
          La historia de ‘Coco’, el perro que es tratado en un refugio por
          abstinencia de alcohol
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          En Reino Unido, un refugio de animales llamado Woodside Animal Rescue
          Trust atendió a un perro con adicción al alcohol, siendo el primer
          caso de este tipo. A continuación, te contamos su conmovedora
          historia.
        </p>
        <!--Autor11-->
        <div class="perfil">
          <img src="../../img/blog-img/mr world.PNG" alt="" class="perfil-img" />
          <span class="perfil-nombre">Miguel Fernandez</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>

      <!--publicacion 12-->
      <div class="post-box adopcion">
        <img src="../../img/blog-img/post12.png" alt="" class="post-img" />
        <h2 class="category">Adopción</h2>
        <a
          href="https://www.tvperu.gob.pe/noticias/locales/surco-lanza-plataforma-para-adoptar-animales-abandonados"
          target="_blank"
          class="post-title"
        >
          Surco lanza plataforma para adoptar animales abandonados
        </a>
        <span class="post-fecha">12 Ago 2022</span>
        <p class="post-descripcion">
          A fin de facilitar el trámite para la adopción de animales
          abandonados, la Municipalidad de Santiago de Surco ha lanzado una
          plataforma web que le permite a los ciudadanos presentar la solicitud
          de manera fácil y gratuita, para acoger a un nuevo compañero de cuatro
          patas.
        </p>
        <!--Autor12-->
        <div class="perfil">
          <img src="../../img/blog-img/ricolas.jpg" alt="" class="perfil-img" />
          <span class="perfil-nombre">Nicolas de las casas</span>
          <div class="boton-like">
            <div class="heart-bg">
              <div class="icono-corazon"></div>
            </div>
            <div class="contador-like">7</div>
          </div>
        </div>
      </div>
    </section>
    <!--script de movimiento-->
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <script src="../../js/noticias.js"></script>

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
