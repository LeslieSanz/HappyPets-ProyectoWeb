<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet"   href="../css/styleNosotros.css" />
    <link rel="stylesheet"   href="../css/header.css" />
    <link rel="stylesheet"   href="../css/footer.css" />
    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>
    <link rel="icon" href = "../img/logos/logopets.png" type = "image/x-icon">
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

    <section id="refugio">
        <div class="container_refugio">
            <div class="refugio_img">
                <img src="../img/nosotros-img/refugio.jpg" alt="foto del refugio">
            </div>
            <div class="refugio_texto">
                <h2>En Happy Pets, ofrecemos un refugio seguro para perros y gatos sin hogar. Creemos que cada vida peluda merece una segunda oportunidad.</h2>
                <p> 
                    Además, trabajamos incansablemente para reunir a animales perdidos con sus familias amorosas y proporcionar asistencia para aquellos animales sin hogar. 
                </p>
                <p>
                    A través de donaciones generosas y el apoyo de nuestra comunidad, estamos comprometidos a proporcionar atención médica, nutrición adecuada y un ambiente de cariño para cada animal bajo nuestro cuidado.
                </p>
            </div>
        </div>
        
    </section>

    <section class="historia">
    <div class="timeline">
        <div class="container_timeline left_container">
            <img src="../img/nosotros-img/patita.jpg">
            <div class="textbox">
               <h2>2020: Fundación de Happy Pets</h2>
               <p>El  refugio fue fundado con la misión de brindar amor y un hogar seguro a perros y gatos sin hogar.
                Desde el principio, nos dedicamos a ofrecer una segunda oportunidad a cada vida peluda que entra por nuestras puertas.
               </p> 
               <span class="left_container_arrow"></span>
            </div>
        </div>

        <div class="container_timeline right_container">
            <img src="../img/nosotros-img/patita.jpg">
            <div class="textbox">
               <h2>2021: Primeras Adopciones Exitosas</h2>
               <p>En nuestro segundo año, celebramos nuestras primeras adopciones exitosas.Numerosas mascotas encontraron 
                hogares amorosos y familias dedicadas que los cuidaron y amaron como parte de sus familias.</p> 
               <span class="right_container_arrow"></span>
            </div>
        </div>

        <div class="container_timeline left_container">
            <img src="../img/nosotros-img/patita.jpg">
            <div class="textbox">
               <h2>2022: Expansión de las Instalaciones</h2>
               <p>Con el apoyo de nuestra increíble comunidad, pudimos expandir nuestras instalaciones para dar cabida a más animales necesitados. Construimos nuevas 
                áreas para el cuidado y el juego.</p>
               <span class="left_container_arrow"></span> 
            </div>
        </div>

        <div class="container_timeline right_container">
            <img src="../img/nosotros-img/patita.jpg">
            <div class="textbox">
               <h2>2023: Programas de Educación y Concientización</h2>
               <p>Este año marcó el inicio de nuestros programas educativos y de concientización. Nos embarcamos en iniciativas para educar a la comunidad
                 sobre la adopción responsable, el cuidado adecuado de las mascotas y la importancia de la esterilización.</p> 
               <span class="right_container_arrow"></span>
            </div>
        </div>
    </div>
    </section>
    <script src="../js/nosotros.js"></script>

    <section id="nuestroequipo">
        <div class="container-equipo">
            <h1 class="titulo-equipo"><span>conoce a </span>Nuestro equipo</h1>
            <div class="perfiles-1">
                <div class="perfil">
                    <img src="../img/nosotros-img/Les.jpg" class="perfil-img">
                    <h3 class="nombre-usuario">Leslie Sánchez</h3>
                    <h5>Directora del refugio</h5>
                    <p>Gestiona operaciones, adopciones y asegura el bienestar de los animales.</p>
                </div>
                <div class="perfil">
                    <img src="../img/nosotros-img/Adr.jpg" class="perfil-img">
                    <h3 class="nombre-usuario">Adrián Cisneros</h3>
                    <h5>Jefe de rescatistas</h5>
                    <p>Asegura seguridad y bienestar en situaciones de emergencia y rescate animal.</p>
                </div>
                <div class="perfil">
                    <img src="../img/nosotros-img/Wal.jpg" class="perfil-img">
                    <h3 class="nombre-usuario">Walter Falcón</h3>
                    <h5>Médico veterinario</h5>
                    <p>Ofrece cuidados médicos, tratamientos y cirugías para el bienestar animal</p>
                </div>
            </div>
        </div>
        <div class="perfiles-2">
            <div class="perfil">
                <img src="../img/nosotros-img/Dom.jpg" class="perfil-img">
                <h3 class="nombre-usuario">Dominith Anton</h3>
                <h5>Especialista en recaudación de fondos</h5>
                <p>Organiza donaciones, eventos de recaudación y construye relaciones para apoyar al refugio</p>
            </div>
        

        
            <div class="perfil">
                <img src="../img/nosotros-img/Ant.jpg" class="perfil-img">
                <h3 class="nombre-usuario">Anthony Peña</h3>
                <h5>Coordinador de adopciones</h5>
                <p>Facilita adopciones, asegura coincidencia ideal entre familias y animales rescatados</p>
            </div>
        </div>
    </section>

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