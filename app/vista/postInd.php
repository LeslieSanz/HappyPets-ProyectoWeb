<?php
require_once __DIR__ . '/../controlador/postControlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?php echo $postDetalles['titulo']; ?></title>
    <link rel="stylesheet"   href="../../css/stylePost_pagina.css" />
    <link rel="stylesheet"   href="../../css/header.css" /> 
    <link rel="stylesheet"   href="../../css/footer.css" />
    <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
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
    <!--FIN CABECERA-->

<!--Contenido del post-->
<section class="post-header" id="descripcion">
      <div class="header-content post-container">
        <!--Retroceder a la pagina de noticias-->
        <a href="blog.php" class="back-home">Regresar</a>
        <!--Titulo-->
        <h1 class="header-title">
        <?php echo $postDetalles['titulo']; ?>
        </h1>
        <!--Imagen del post-->
        <div class="post_img">
            <?php
            echo "<img src='/HappyPets-ProyectoWeb/uploads/" . $postDetalles['foto'] . "' alt='Imagen'><br>";
            ?>
            </div>
      </div>
    </section>



    <!--publicaciones/posts-->
    <section class="post-content post-container">
    <div style="display: flex; flex-direction: row-reverse;  justify-content: space-between;">
                    <p><?php echo $postDetalles['categoria']; ?></p>
                </div>

                <p><?php echo $postDetalles['contenido']; ?></p>
    </section>

    <section id="jjjd" class="section">
	<div class="comment post-container">
		<div class="row">

			<div class="col-12">
				<!-- section title -->
				
			
			<br>
			<br>

				<h3>Sección de comentarios</h3>
				<p>Cuentanos tu opinion acerca de esta noticia</p>
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
