<?php
require_once __DIR__ . '/../controlador/animalControlador.php';

?>
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
    <main>
            <section class="filtros-busqueda">
            <form id="form-busqueda-adopta" name="form-busqueda-adopta" method="post">
                <div class="filtro">
                    <label for="tipo-animal">Tipo de Animal:</label>
                    <select id="tipo-animal" name="tipo-animal">
                        <option value="todos">Todos</option>
                        <option value="felino">Felino</option>
                        <option value="canino">Canino</option>
                    </select>
                </div>
                <div class="filtro">
                    <label for="sexo-animal">Sexo:</label>
                    <select id="sexo-animal" name="sexo-animal">
                        <option value="todos">Todos</option>
                        <option value="hembra">Hembra</option>
                        <option value="macho">Macho</option>
                    </select>
                </div>
                <div class="filtro">
                    <label for="tamano-animal">Tamaño:</label>
                    <select id="tamano-animal" name="tamano-animal">
                        <option value="todos">Todos</option>
                        <option value="pequeño">Pequeño</option>
                        <option value="mediano">Mediano</option>
                    </select>
                </div>
                <button type="submit" name= "enviar" >Buscar</button>
            </form>
        </section>

        
        <!-- En la sección de resultados... -->
        <div class="resultados-mensaje">
            <?php echo $mensajeResultados; ?>
        </div>


        <section class="container">
                <div class="card-container">
                    <?php foreach ($animales as $animal): ?>
                    <div class="card">
                        <figure>
                        <?php
                        echo "<img src='/HappyPets-ProyectoWeb/uploads/" . $animal['foto'] . "' alt='Imagen'><br>";
                        ?>
                        </figure>
                        <div class="contenido">
                            <h3><?php echo $animal['nombre']; ?></h3>
                            <p><?php echo $animal['sexo'] . ', ' . $animal['edad'] . '. De tamaño ' . $animal['tamano'] . '. ' . $animal['caracteristicas']; ?></p>
                            <a href="#">Leer Más</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
        </section>
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
