<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pets</title>
    <link   rel="stylesheet" href="../../css/styleAdopta.css"/>
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
                        <li><a href="donaciones.php">Donaciones</a>
                    </ul>
                </li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="but">
        <button class="btn" type="button" onclick="mostrarTodos()">Mostrar Todos</button>
        <button class="btn" type="button" onclick="mostrarGatos()">Mostrar Gatos</button>
        <button class="btn" type="button" onclick="mostrarPerros()">Mostrar Perros</button>
        </section>
        <section>
            <div class="container">
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat1.png">
                </figure>
                <div class="contenido">
                    <h3>Luna</h3>
                    <p>Edad: 3 años
                        Características: Luna es una gata de pelaje negro brillante, con ojos amarillos y un carácter amigable. Es tranquila y le encanta jugar con juguetes de plumas.
                        Razón de Adopción: Fue rescatada de la calle y está buscando un hogar amoroso.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat2.jpg">
                </figure>
                <div class="contenido">
                    <h3>Simba</h3>
                    <p>Edad: 1 año
                        Características: Simba es un gato atigrado de tamaño mediano. Es muy juguetón y le encanta estar cerca de las personas.
                        Razón de Adopción: Su dueño original tuvo problemas de salud y no pudo cuidarlo.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat3.png">
                </figure>
                <div class="contenido">
                    <h3>Misha</h3>
                    <p>Edad: 5 años
                        Características: Misha es una gata siamesa de ojos azules, muy cariñosa y sociable. Le gusta la compañía de otros gatos.
                        Razón de Adopción: Su familia se mudó y no podían llevarla con ellos.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
        <section><div class="container">
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per6.jpg">
                </figure>
                <div class="contenido">
                    <h3>Lola</h3>
                    <p>Edad: 3 años
                        Características: Lola es un Pug de color crema con una carita adorable y arrugada.
                        Razón de adopción: Lola es una perra extremadamente cariñosa y se lleva bien con niños y adultos por igual.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per8.jpg">
                </figure>
                <div class="contenido">
                    <h3>Miku</h3>
                    <p>Edad: 2 años
                        Características: Luna es un perro criollo de tamaño mediano con un pelaje corto.
                        Razón para adoptar: Miku es leal y una compañera devota.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per9.jpg">
                </figure>
                <div class="contenido">
                    <h3>Buddy</h3>
                    <p>Edad: 6 años
                        Características: Buddy  es una mezcla de razas criollas, con un pelaje corto.
                        Razón para adoptar: Buddy es energético y ideal para aventuras al aire libre.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
        <section><div class="container">
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per7.jpg">
                </figure>
                <div class="contenido">
                    <h3>Max</h3>
                    <p>Edad: 5 años
                        Características: Max es un Schnauzer miniatura de color sal y pimienta. 
                        Razón para adoptar: Max es alerta y un gran compañero de seguridad.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per5.jpg">
                </figure>
                <div class="contenido">
                    <h3>Bella</h3>
                    <p>Edad: 3 años
                        Características: Buddy es una Beagle tricolor con ojos expresivos y orejas largas.
                        Razón para adoptar: Bella es cariñosa y se adapta fácilmente a cualquier hogar.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per4.jpg">
                </figure>
                <div class="contenido">
                    <h3>Buddy</h3>
                    <p>Edad: 6 años
                        Características: Bella es un Bichón Maltés de pelaje blanco y esponjoso.
                        Razón para adoptar: Buddy es inteligente y excelente para entrenar.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
        <section><div class="container">
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per1.jpg">
                </figure>
                <div class="contenido">
                    <h3>Oliver</h3>
                    <p>Edad: 6 meses
                        Características: Oliver es un perro blanco y pequeñito. Es curioso y siempre para lleno de energía.
                        Razón de Adopción: Fue encontrado abandonado en un parque.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per2.jpg">
                </figure>
                <div class="contenido">
                    <h3>Nala</h3>
                    <p>Edad: 4 años
                        Características: Nala es una perrita de pelo largo y pelaje tricolor. Es tranquila y le gusta relajarse en el sol.
                        Razón de Adopción: Su dueño falleció y no había familiares que pudieran cuidar de ella.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card perro">
                <figure>
                    <img src="../../img/adopta-img/per3.jpg">
                </figure>
                <div class="contenido">
                    <h3>Max</h3>
                    <p>Edad: 2 años
                        Características: Max es un perro salchicha muy juguetón y le encanta explorar.
                        Razón de Adopción: Fue abandonado en una caja frente a un refugio.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
        <section>
            <div class="container">
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat4.jpg">
                </figure>
                <div class="contenido">
                    <h3>Milo</h3>
                    <p>Edad: 3 años
                        Características: Milo es una gata de pelaje negro brillante, con ojos amarillos y un carácter amigable. Es tranquila y le encanta jugar con juguetes de plumas.
                        Razón de adopción: Milo busca un hogar porque su dueño anterior tuvo que mudarse a un lugar donde no se permiten mascotas.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat5.jpeg">
                </figure>
                <div class="contenido">
                    <h3>Luz</h3>
                    <p>Edad: 1 año
                        Características: Luz es un gato atigrado de tamaño mediano. Es muy juguetón y le encanta estar cerca de las personas.
                        Razón de adopción: Luz fue encontrada en la calle, perdida y sin un hogar donde refugiarse.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat6.jpg">
                </figure>
                <div class="contenido">
                    <h3>Leon</h3>
                    <p>Edad: 5 años
                        Características: Leon es una gata siamesa de ojos azules, muy cariñosa y sociable. Le gusta la compañía de otros gatos.
                        Razón de adopción: Leon fue rescatado de un refugio donde esperaba ansiosamente una oportunidad para tener un hogar permanente.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
        <section>
            <div class="container">
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat7.jpg">
                </figure>
                <div class="contenido">
                    <h3>Leo</h3>
                    <p>Edad: 3 años
                        Características: Leo es una gata de pelaje negro brillante, con ojos amarillos y un carácter amigable. Es tranquila y le encanta jugar con juguetes de plumas.
                        Razón de adopción: Leo fue abandonada por su dueño anterior debido a cambios en su situación de vida.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat8.jpg">
                </figure>
                <div class="contenido">
                    <h3>Maya</h3>
                    <p>Edad: 1 año
                        Características: Maya es un gato atigrado de tamaño mediano. Es muy juguetón y le encanta estar cerca de las personas.
                        Razón de adopción: Maya fue encontrado abandonado en una zona industrial y necesita un hogar donde lo cuiden y amen.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="card gato">
                <figure>
                    <img src="../../img/adopta-img/gat9.png">
                </figure>
                <div class="contenido">
                    <h3>Cleo</h3>
                    <p>Edad: 5 años
                        Características: Cleo es una gata siamesa de ojos azules, muy cariñosa y sociable. Le gusta la compañía de otros gatos.
                        Razón de adopción: Cleo fue rescatada de un entorno poco seguro y busca un hogar lleno de amor y seguridad.</p>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div></section>
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
