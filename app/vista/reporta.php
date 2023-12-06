<?php
require_once __DIR__ . '/../controlador/reporteControlador.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reporta-Happy Pets</title>
    <link rel="icon" href="../../img/logos/logopets.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styleReporta.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <!-- BLOBLIOTECA jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>
    <!-- BIBLIOTECA Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper LIBRERIA PARA EL SLIDER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




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
            Los peluditos te necesitan <br />
            Sé su voz, reporta.
        </h1>

        <button id="BotonBanner">¡Reporta!</button>



    </section>


    <!-- PARTE DE ANIMALES EXTRAVIADOS  CARRUSEL DE  CARTAS-->
    <section class="section-animales">

        <div class="container">
            
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">

                    <?php foreach ($animales_reporte as $animal): ?>

                        <div class="swiper-slide">


                            <?php
                            echo "<img src='/HappyPets-ProyectoWeb/uploads/" . $animal['foto'] . "' alt='Imagen'><br>";
                            ?>
                            <div class="cardDescription">
                                <div class="card-title">
                                    <h4><?php echo $animal['especie'] . " encontrado"; ?></h4>
                                </div>
                                <div class="card-text">
                                    <?php echo "Encontrado en: " . $animal['distrito']; ?>
                                </div>
                                <div class="card-boton">
                                    <button 
                                        class="animal-button Reporte" 
                                        data-foto="<?php echo $animal['cod_ani']; ?>"      
                                        data-toggle= "modal" >+info
                                    </button>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

        </div>


        <!-- --------VENTANA MODAL - EMERGENTE------- -->
        <!-- TABINDEX =  significa que no es posible accedar mientras se navega por tab 
            role = dialog  = siginfica que solo es un cuadro que muestra informacion
        -->

        <div class="modal fade" id="popup" tabindex = "-1" role="dialog" aria-hidden="true">
            <!-- actua como un contenedor  para el contenido modal -->
            <div class="modal-dialog" role = "document"><!--el role=document, indica que que es un contenedor-->
                <div class="modal-content"> 
                    <!-- lugar donde irá el boton de cerrar -->
                    <div class="modal-header">
                        <button type="button" id="close" data-dismiss="modal" aria-label="Close">
                            <span id = "X"aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <!-- EL CUERPO DE LA VENTANA -->
                    <div class="modal-body">

                        <img id="imagen" src="" alt="Imagen">

                        <div class=div-text>
                            <p id = distrito>  </p>
                            <br>
                            <p id = referencia>  </p>
                            <br>
                            <p id = info_adicional>
                        </div>

                    </div>

                </div>


            </div>
        </div>


    </section>
    <!-- Enlance que vincula con el js-->
    <script src="../../js/reporta.js"></script>


    <!-- PARTE PARA REPORTA UN ANIMAL-->
    <section class="section-formulario" id="form">


        <div class="section-formulario__div--container2">
            <h1>Formulario de Reporte</h1>

            <form method="post" action="../controlador/reporteControlador.php" enctype="multipart/form-data">
                <!--el enctype es para subir archivos-->

                <div class="form-flex">

                    <div class="section-formulario__div--form2">
                        <h2>Información del Animal</h2>

                        <div class="form-container2">

                            <div class="bloque-div">
                                <label for="especie">Especie del Animal Encontrado</label>

                                <select id="animal" name="animal" onchange="mostrarCampoTexto()">
                                    <option value="ingreseEspecie">Ingrese especie</option>
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
                                    accept="image/*" onchange="mostrarImg()"
                                    required>

                                    <input type="button" value="Subir Foto del animal" class="form-file"
                                        onclick="document.getElementById('boton-file').click()">
                                </div>
                                <div id="previsualizacion">
                                    <p>Imagen previa:</p>
                                    <img id="imagen-previa" src="../../img\reporta-img/gato-gif.gif"
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
                    class="submit" formaction="../controlador/reporteControlador.php">Enviar</button>
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
