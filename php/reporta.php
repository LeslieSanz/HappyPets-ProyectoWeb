<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reporta-Happy Pets</title>
    <link rel="icon" href="../img/logos/logopets.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styleReporta.css" />
    <link rel="stylesheet" href="../css/header.css" />


    <link rel="stylesheet" href="../css/footer.css" />
    <!-- BLOBLIOTECA jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>
    <!-- BIBLIOTECA Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper LIBRERIA PARA EL SLIDER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


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



    <!-- PARTE DEL BANNNER-->

    <section class="section-banner">
        <h1>
            Los peluditos te necesitan <br />
            Sé su voz, reporta. SI ves esto, esto es una prueba
        </h1>

        <button id="BotonBanner">¡Reporta!</button>



    </section>


    <!-- PARTE DE ANIMALES EXTRAVIADOS  CARRUSEL DE  CARTAS-->
    <section class="section-animales">

        <div class="container">

            <div class="swiper-container mySwiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">


                        <img src="../img/reporta-img/1.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Gatito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton1" data-imagen="1.jpg">+info</button>
                            </div>

                        </div>


                    </div>
                    <div class="swiper-slide">

                        <img src="../img/reporta-img/2.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Gatito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton2" data-imagen="2.jpg">+info</button>
                            </div>

                        </div>




                    </div>
                    <div class="swiper-slide">

                        <img src="../img/reporta-img/3.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Perrito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton3">+info</button>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/4.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Perrito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton4">+info</button>
                            </div>

                        </div>


                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/5.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Perrito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton5">+info</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/6.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Gatito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton6">+info</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/7.jpg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Gatito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton7">+info</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/8.jpeg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Gatito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton8">+info</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="../img/reporta-img/9.jpeg">
                        <div class="cardDescription">
                            <div class="card-title">
                                <h4>Perrito reportado</h4>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nostrum quam commodi
                                tempore dolor eos iste est cum, quibusdam repudiandae adipisci neque inventore
                                architecto amet. Corrupti sapiente distinctio sint autem?
                            </div>
                            <div class="card-boton">
                                <button class="Reporte" id="boton9">+info</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

        <!-- Este div con clase "overlay" crea un fondo oscuro detrás del popup -->
        <div class="overlay"></div>

        <!-- El div con el ID "popup" es la ventana emergente -->
        <div id="popup">
            <div class="content-pop">
                <div>
                    <!-- El enlace de la "X" ahora tiene un atributo data-target -->
                    <a href="#" id="close" data-target="#section-animales">x</a>

                </div>
                <div id="imagen1">

                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/1.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d487.82890943881046!2d-77.11552014422199!3d-11.999995986811081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDAwJzAwLjUiUyA3N8KwMDYnNTQuOSJX!5e0!3m2!1sen!2spe!4v1696961831765!5m2!1sen!2spe"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
                <div id="imagen2" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/2.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.8614151685054!2d-77.04319924334953!3d-12.058470857405656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c363f2c8b3%3A0xd7af2f162d0abf6!2sIquique%20823%2C%20Bre%C3%B1a%2015082!5e0!3m2!1ses-419!2spe!4v1696920831543!5m2!1ses-419!2spe"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div id="imagen3" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/3.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.9100422136627!2d-77.0539508714833!3d-11.9301109871278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d03586ed7acb%3A0x69c5f3fb62ccb115!2sAv.%20Micaela%20Bastidas%2C%20Comas%2015312!5e0!3m2!1sen!2spe!4v1696962230658!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen4" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/4.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.1774665405428!2d-77.1217726714833!3d-11.855570786772578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d40df2ac55ab%3A0x3cb5594615db597a!2sAv.%20Cuzco%2C%20Mi%20Per%C3%BA%2007056!5e0!3m2!1sen!2spe!4v1696962310722!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen5" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/5.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4283587337134!2d-77.02690537148312!3d-12.063227287767743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c896221d3483%3A0xdfcec210635860c3!2sTrasportes%20carhuamayo!5e0!3m2!1sen!2spe!4v1696962366106!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen6" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/6.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.71153769285377!2d-77.03699960090228!3d-12.06467935071001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ea61085def%3A0x21f78bc2f6a3db79!2sAv.%2028%20de%20Julio%20886%2C%20Lima%2015046!5e0!3m2!1sen!2spe!4v1696962401978!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen7" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/7.jpg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3194621040016!2d-77.04984747376206!3d-12.031921531470486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf2fa28a690d%3A0xcec4fbee4e9083f4!2sQuimper%20415%2C%20Lima%2015102!5e0!3m2!1sen!2spe!4v1696962500705!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen8" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/8.jpeg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6951.912492326535!2d-77.11624508153686!3d-12.069026246804215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbe98f20d981%3A0xce1f815b45b0ba07!2s%C3%93valo%20de%20La%20Perla%2C%20La%20Perla!5e0!3m2!1sen!2spe!4v1696962546250!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="imagen9" style="display: none;">
                    <div class="div-imagen">
                        <img class="img-popup" src="../img/reporta-img/9.jpeg" alt="Imagen X">
                    </div>

                    <div class=div-text>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum laboriosam expedita,
                            perspiciatis officiis dolor sapiente aspernatur ex quae maiores impedit eveniet quod, ipsam
                            ab
                            aut possimus quasi! Modi, ab!
                        </p>
                    </div>
                    <p>Encontrado en:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.595530380765!2d-77.12102068851293!3d-12.07132624231092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbc3c3d66a1f%3A0x71338fa1440a42b!2sTupac%20Amaru%201689-1604%2C%20La%20Perla%2007016!5e0!3m2!1sen!2spe!4v1696962588392!5m2!1sen!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>





    </section>
    <!-- Enlance que vincula con el js-->
    <script src="../js/reporta.js"></script>


    <!-- PARTE PARA REPORTA UN ANIMAL-->
    <section class="section-formulario" id="form">


        <div class="section-formulario__div--container2">
            <h1>Formulario de Reporte</h1>

            <form method="post" action="REPORTAPRUEBA.php">

                <div class="form-flex">
                    <div class="section-formulario__div--form1">
                        <h2>Información de contacto</h2>
                        <div class="form-container1">


                            <div class="nombre-div">
                                <label for="nombres-apellidos">Nombres y Apellidos</label>
                                <input type="text" class="form-text" name="nombres-apellidos"
                                    value="Ingrese nombres y apellidos" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)">
                            </div>

                            <div class="celular-div">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-text" name="celular" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)"
                                    value="Ingrese su telefono(opcional)">

                            </div>

                            <div class="correo-div">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-text" name="correo" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)"
                                    value="Ingrese su correo electronico" required>
                            </div>
                        </div>
                    </div>

                    <div class="section-formulario__div--form2">
                        <h2>Información del Animal</h2>

                        <div class="form-container2">

                            <div class="bloque-div">
                                <label for="especie">Especie del Animal Encontrado</label>

                                <select id="animal" name="animal" onchange="mostrarCampoTexto()">
                                    <option value="gato">Ingrese especie</option>
                                    <option value="gato">Felino</option>
                                    <option value="perro">Canino</option>
                                    <option value="otro">Otro</option>
                                </select>

                                <div id="otro-texto" style="display: none;">
                                    <label for="otroAnimal">Especifica:</label>
                                    <input type="text" class="form-text" name="otroAnimal" oninput="cambiarColor(this)"
                                        onfocus="borrarTexto(this)" onblur="restaurarTexto(this)"
                                        value="Ingrese especie">
                                </div>

                                <label for="distrito">Distrito del Animal Encontrado</label>
                                <input type="text" class="form-text" name="distrito" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)" value="Ingrese Distrito"
                                    required>

                                <label for="direccion">Dirección de la Calle</label>
                                <input type="text" class="form-text" name="direccion" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)"
                                    value="Ingrese dirección exacta" required>



                                <label for="referencia">Referencia de la Calle</label>
                                <input type="text" class="form-text" name="referencia" oninput="cambiarColor(this)"
                                    onfocus="borrarTexto(this)" onblur="restaurarTexto(this)"
                                    value="Ingrese referencia (opcional)">


                                <label for="info-adicional">Información Adicional (máx. 120 caracteres)</label>
                                <textarea id="info-adicional" name="info-adicional" rows="4" maxlength="120"
                                    style="font-size: 17px;"></textarea>
                            </div>
                            <div class="container-fotos">
                                <div class="form-foto">
                                    <input type="file" id="boton-file" 
                                    name="foto-animal"
                                    accept="image/*" onchange="mostrarImagen()"
                                    required>

                                    <input type="button" value="Subir Foto del animal" class="form-file"
                                        onclick="document.getElementById('boton-file').click()">
                                </div>
                                <div id="previsualizacion">
                                    <p>Imagen previa:</p>
                                    <img id="imagen-previa" src="../img\reporta-img/gato-gif.gif"
                                        alt="Vista previa de la imagen">
                                    <p id="nombre-archivo">Nombre del archivo: <span></span></p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-boton">
                    <button type="submit" 
                    name= "enviarDatosForm"
                    class="submit" formaction="#form">Enviar</button>
                </div>



            </form>
        </div>


        <?php 
        include("REPORTAPRUEBA.php");
        ?>



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