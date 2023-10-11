<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pets</title>
    <link rel="stylesheet" href="../css/styleInicio.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="icon" href="../img/logos/logopets.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>


</head>

<body>

    <!--CABECERA-->
    <header>
        <a href="../html/index.html" class="logo">
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
        <h1>Brindemos refugio</h1>
        <h2>a quienes más lo necesitan</h2>
        <a href="../html/adopta.html">Adopta ya</a>
    </section>

    <section id="cifras">
        <div class="resultados">
            <div class="container-resultados">
                <div class="resultados-frase">
                    Encuentra a tu compañero peludo en nuestro refugio
                </div>
                <div class="resultados-numeros">
                    <p>
                        <span>+120</span><br>rescatados
                    </p>
                    <p>
                        <span>+300</span><br>adoptados
                    </p>
                    <p>
                        <span>+50</span><br>encontrados
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container">

            <div class="title">
                <div class="title-container">
                    <h1>¿Cómo puedo ayudar?</h1>
                    <p>Descubre maneras de marcar la diferencia con Happy Pets. Cada gesto cuenta para crear
                        un hogar amoroso para los animales. ¡Deja tu huella hoy! </p>
                </div>
            </div>
            <div class="card" id="card1">
                <figure>
                    <img src="../img/inicio-img/adopta.png">
                </figure>
                <div class="contenido">
                    <h3>Adopciones</h3>
                    <p>Descubre el amor incondicional adoptando
                        un perro o gato en Happy Pets: tu vida y
                        la suya cambiarán para siempre.
                    </p>
                    <a href="../html/adopta.html">Leer Más</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="../img/inicio-img/donacion.png">
                </figure>
                <div class="contenido">
                    <h3>Donaciones</h3>
                    <p>Contribuye monetariamente, con alimentos, etc.
                        Tu ayuda construye un futuro mejor para nuestros amigos sin hogar.
                    </p>
                    <a href="../html/donaciones.html">Leer Más</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="../img/inicio-img/encontrar.png">
                </figure>
                <div class="contenido">
                    <h3>Reportes</h3>
                    <p>¿Has visto a un animal perdido? Reporta avistamientos
                        y ayúdanos a reunir familias. Juntos podemos
                        salvar vidas peludas.

                    </p>
                    <a href="../html/reporta.html">Leer Más</a>
                </div>
            </div>
        </div>
    </section>

    <!--SLIDER DE TESTIMONIOS-->
    <section class="slider">
        <div class="titulo-testimonios">
            <h1>Historias que mueven colas y corazones</h1>
            <p>Explora nuestras conmovedoras historias de adopción, donde el amor incondicional y las
                segundas oportunidades se entrelazan en cada historia.</p>
        </div>
        <div class="slider_container contenedore">
            <img src="../img/inicio-img/leftarrow.svg" class="slider_arrow" id="before">

            <section class="slider_body slider_body--show" data-id="1">
                <div class="slider_text">
                    <h2>Amor rescatado, un mundo transformado</h2>
                    <p class="slider_review"><i class="fa-solid fa-quote-left"></i>
                        Jamás imaginé cuánto amor y gratitud podría traer un perrito
                        rescatado a mi vida. Gracias a Happy Pets, adopté a mi pequeño amigo y desde entonces, hemos
                        compartido
                        risas, abrazos y aventuras inolvidables. ¡La adopción cambió mi mundo para mejor!
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>
                <figure class="slider_picture">
                    <img src="../img/inicio-img/testi1.png" class="slider_img">
                </figure>
            </section>

            <section class="slider_body" data-id="2">
                <div class="slider_text">
                    <h2>Un viaje de adopción gatuna</h2>
                    <p class="slider_review"><i class="fa-solid fa-quote-left"></i>
                        La decisión de adoptar a mi nuevo gatito en Happy Pets fue
                        impulsada por un deseo de hacer una diferencia en su vida y en la mía. Desde el primer día, su
                        amor
                        y travesuras llenaron mi hogar de alegría. Cada vez que miro esos ojos brillantes, sé que
                        hicimos la
                        elección correcta al adoptar
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>
                <figure class="slider_picture">
                    <img src="../img/inicio-img/testi2.png" class="slider_img">
                </figure>
            </section>

            <section class="slider_body" data-id="3">
                <div class="slider_text">
                    <h2>Lecciones de la vida con patas</h2>
                    <p class="slider_review"><i class="fa-solid fa-quote-left"></i>
                        Adoptar a un perro no solo nos dio un leal amigo,
                        sino que también nos enseñó el verdadero significado de la lealtad y la conexión. Cada día,
                        nuestro peludo compañero nos recuerda la importancia de vivir el
                        presente y disfrutar las cosas simples de la vida. Estamos agradecido por esta increíble
                        experiencia.
                        <i class="fa-solid fa-quote-right"></i>
                    </p>
                </div>
                <figure class="slider_picture">
                    <img src="../img/inicio-img/testi3.png" class="slider_img">
                </figure>
            </section>

            <img src="../img/inicio-img/rightarrow.svg" class="slider_arrow" id="next">

        </div>
    </section>


    <script src="../js/slider.js"></script>

    <section class="unete">
        <h1 class="titulo-unete">Sé parte de nuestra manada</h1>
        <a href="javascript:popUp('registro.html')">Súmate al cambio hoy</a>
    </section>

    <!--CARRUSEL DE LOGOS DE AUSPICIADORES-->
    <div class="carrusel">
        <div class="carrusel-items">
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/mima.png" alt="" />
            </div>
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/caverito.png" alt="" />
            </div>
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/purina.png" alt="" />
            </div>
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/rondone.png" alt="" />
            </div>
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/superpet.png" alt="" />
            </div>
            <div class="carrusel-item">
                <img src="../img/inicio-img/carrusel-img/logoUTP.png" alt="" />
            </div>
        </div>
    </div>
    <script src="../js/main.js"></script>


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
