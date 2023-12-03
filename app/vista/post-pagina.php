<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog-HappyPets</title>
    <link rel="stylesheet" href="../../css/stylePost_pagina.css" />
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
                echo '<li><a href="UsuarioEdit.php"> Bienvenido '.$_SESSION["usuario"].'</a></li>';
                echo '<li><a href="../../app/controlador/CierreSesion.php">Cerrar Sesion</a></li>';
            } else {
                echo '<li><a href="login.php">Iniciar sesión</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
    <!--Contenido del post-->
    <section class="post-header">
      <div class="header-content post-container">
        <!--Retroceder a la pagina de noticias-->
        <a href="blog.php" class="back-home">Regresar</a>
        <!--Titulo-->
        <h1 class="header-title">
          3 hábitos para tener una mascota sana y activa
        </h1>
        <!--Imagen del post-->
        <img src="../../img/blog-img/post3.PNG" alt="" class="header-img" />
      </div>
    </section>

    <!--publicaciones/posts-->
    <section class="post-content post-container">
      <p class="post-text">
        Según diferentes estudios de empresas colombianas, se estima que, en
        nuestro país,
        <strong
          >6 de cada 9 familias tienen alguna mascota o animal de
          compañía.</strong
        >
        Cada vez es más común que los hogares opten por incluir a uno de estos
        miembros.
      </p>
      <p class="post-text">
        Cada animal, según su raza, tamaño y edad
        <strong
          >requiere de diferentes cuidados y rutinas que le ayudarán a
          garantizar una vida larga y saludable.</strong
        >
        Por esta razón en Canal Institucional hemos consultado a los expertos
        para conocer más sobre las prácticas para cuidar a nuestras mascotas.
      </p>
      <p class="post-text">
        La médica veterinaria, Ana Milena Herrera, afirma que, al hablar de
        mascotas,
        <strong
          >la base para un cuidado óptimo es la creación de hábitos o rutinas
          saludables</strong
        >
        en todas las áreas de la vida del animal.
      </p>
      <p class="post-text">
        “Crear una rutina es muy importante para ellos: en cuanto a la comida, a
        sus horas de salida para hacer sus necesidades, si lo mandan a pasear,
        si sus salidas son diarias, cada tercer día, una vez a la semana, etc”,
        coincide Clara Peña, paseadora de perros.
      </p>
      <p class="post-text">
        La médica Ana Milena, desde su opinión profesional, afirma que estas
        prácticas se pueden clasificar dentro de
        <strong>3 hábitos que harán a tu mascota más sana y activa.</strong>
      </p>
      &nbsp;

      <h2 class="sub-heading">Top 3 hábitos para el cuidado de tu mascota</h2>
      <h3 class="sub-sub-heading">1.La alimentación</h3>
      <p class="post-text">
        Dar
        <strong
          >una muy buena alimentación a tu mascota y acostumbrarla a ciertas
          horas para administrar sus comidas</strong
        >
        ayudará a disminuir el riesgo de tener enfermedades que pueden ser
        causadas por ayunos prolongados o por malos hábitos en ese régimen de
        alimentación, como la obesidad.
      </p>
      <p class="post-text">
        Según su edad y raza
        <strong
          >puedes escoger la comida que sea más conveniente para tu
          mascota,</strong
        >
        sea concentrado o preparada en casa. Es importante
        <strong
          >consultar al veterinario para definir la dieta o si se desean hacer
          cambios en ella.</strong
        >
      </p>

      <h3 class="sub-sub-heading">2.El ejercicio</h3>
      <p class="post-text">
        Es fundamental tener
        <strong
          >una rutina relacionada con la actividad física en las
          mascotas,</strong
        >
        especialmente en los perros, sin importar su raza, la edad o
        características particulares.
      </p>
      <p class="post-text">
        Estos animales deben salir a hacer ciertas rutinas de ejercicio. Caminar
        o salir a trotar
        <strong>les ayuda a liberar la carga de estrés o ansiedad.</strong>
        También ayuda a tener una mascota saludable, ya que evitará tener
        problemas de obesidad por sedentarismo.
      </p>

      <h3 class="sub-sub-heading">3.Salud e higiene</h3>
      <p class="post-text">
        Es fundamental cuidar estos aspectos en nuestras mascotas, ya que, en
        mayor parte son áreas que ellos no pueden cubrir por su cuenta. Esto
        incluyen
        <strong
          >rutinas como el cepillado de pelo y dientes, la limpieza de patas
          después de salir, baños periódicos </strong
        >y monitoreo de cualquier síntoma extraño para
        <strong>acudir a un veterinario.</strong>
      </p>
      <p class="post-text">
        Este último aspecto es indispensable
        <strong
          >ante cambios en el comportamiento y en el estado de salud,</strong
        >
        por ejemplo, si la mascota deja de comer, dificultad para defecar,
        vómitos, rasquiña frecuente, entre muchos aspectos más que pueden ser
        indicativos de que la mascota requiere atención a su salud.
      </p>
      <p class="post-text">
        También
        <strong
          >es necesario tener el esquema de vacunas al día, hacer las
          respectivas desparasitaciones</strong
        >
        cuando se necesiten, el control de pulgas y garrapatas y el cuidado de
        la salud oral.
      </p>
    </section>


    <section id="jjjd" class="section">
	<div class="comment post-container">
		<div class="row">

			<div class="col-12">
				<!-- section title -->
				
			
			<br>
			<br>

				<h3>Comentario</h3>
				<p>Cuentanos tu opinion acerca de nuestro sitio</p>
					<br>	

			<!-- Contact Details -->
			<div class="contact-info col-lg-6 wow fadeInUp" data-wow-duration="500ms">
			
	

<form id="frm-comment">
<!--<div class="input-row">
    <input type="hidden" name="comment_id" id="post" placeholder="Nombre" />
	<label for="nombre" class="form-label">Usuario:</label> 
    <input class="form-control" type="text" name="nombre" id="nombre" readonly value="<?php echo $_SESSION['cod_usu']; ?>" required/>
</div>-->

<div class="input-row">
<label for="comme" class="form-label">Comentario:</label>
    <p class="emoji-picker-container">
      <textarea rows="6" class="form-control" 
	  type="text" name="comentario" id="comentario" placeholder="Agregue su comentario" required></textarea>
    </p>
</div>

<div>
    <button onclick="agregarComentario()"class="btn-primary " id="submitButton">Agregar Comentario</button>
</div>
<br>

<div id="comment-message">¡Tu comentario se agrego!</div>

<?php include '../controlador/ComentarioControlador.php'; 
if(isset($_SESSION['cod_usu'])){
  $codigo_usuario = $_SESSION['cod_usu'];

  // Obtener la lista de comentarios
  $sql = "SELECT c.cod_com, c.contenido, c.fecha_publi, c.cod_usu, u.nombre 
          FROM comentario c 
          INNER JOIN usuario u ON c.cod_usu = u.cod_usu";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
          echo "<div class='comentario'>";
          echo "<div class='perfil'>";
          echo "<img src='../../img/blog-img/perfilCom.png' alt='Imagen de perfil fija' class='imagen-perfil'>";
          echo "<span class='usuario'><strong>" . $row['nombre'] ."</strong> <br>";
          echo"</div>";
          
         echo "<span class='fecha'>" . $row['fecha_publi'] . "</span>";
          echo "<div class='contenido'>" . $row['contenido'] . "</div>";
          echo "</div>";
      }
  } else {
     echo "No hay comentarios aún.";
      }
  } else {
    echo "<div class='mensaje-error'>Se necesita <a href='login.php'><strong>iniciar sesión</strong></a>para comentar y ver los comentarios  </div>";
  ;
  } ?>





</form>
</div><div id="output"></div>

</div>

				</form>
			</div>
			</div>
			
    
			
					
			<!-- / End Contact Details -->

			<!-- Contact Form -->
    
    <!--script de movimiento-->
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <script src="../../js/post-pagina.js"></script>
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
