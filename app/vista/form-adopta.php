<?php
session_start();
require_once __DIR__ . '/../controlador/animalControlador.php';
require_once __DIR__ . '/../controlador/adoptaControlador.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Adopcion</title>
   <link rel="stylesheet" href="../../css/styleFormAdo.css" />
   <link rel="icon" href = "../../img/logos/logopets.png" type = "image/x-icon">
  </head>
  <body>
    <div class="form">
      <div class="form-container">
        <!-- Barra lateral progresiva -->
        <div class="form-sidebar">
          <div class="step active">
            <div class="circle">1</div>
            <div class="step-content">
              <span>Paso 1</span>
              <b>Datos personales</b>
            </div>
          </div>
          <div class="step">
            <div class="circle">2</div>
            <div class="step-content">
              <span>Paso 2</span>
              <b>Requisitos</b>
            </div>
          </div>
          <div class="step">
            <div class="circle">3</div>
            <div class="step-content">
              <span>Paso 3</span>
              <b>Llena tu solicitud</b>
            </div>
          </div>
          <div class="step">
            <div class="circle">4</div>
            <div class="step-content">
              <span>Paso 4</span>
              <b>Confirmación</b>
            </div>
          </div>
        </div>
        <!-- Fin de la barra lateral -->

            <!-- Formulario oculto para enviar datos al controlador jeje -->
        <form id="formularioOculto" method="post" style="display: none;">
            <input type="hidden" id="codigoHidden" name="codigo" value="<?php echo htmlspecialchars($_SESSION["cod_usu"]); ?>"/>
            <input type="hidden" id="codigoAniHidden" name="codigoAni" value="<?php echo $animalDetalles['cod_aniAdo']; ?>"/>
            <input type="hidden" id="nombreHidden" name="nombre">
            <input type="hidden" id="correoHidden" name="correo">
            <input type="hidden" id="dniHidden" name="dni">
            <input type="hidden" id="celularHidden" name="celular">
            <input type="hidden" id="distritoHidden" name="distrito">
        </form>

        <!-- Inicio del paso 1 -->
        <div class="stp step-1">
          <div class="header">
            <h1 class="title">Completa o actualiza tus datos</h1>
            <p class="exp" style="color: black;">
              Para adoptar a <?php echo $animalDetalles['nombre']; ?>, necesitamos tus datos completos para
              comunicarnos contigo. Verifica que a información esté actualizada.
            </p>
          </div>
          <form>
            <div class="form-container">
              <!-- Columna 1 -->
              <div class="form-column">

                <div class="label">
                  <label for="nombre">Nombre</label>
                  <p class="error">Campo obligatorio</p>
                </div>
                <input required type="text" id="nombre" name="nombre"
                 value="<?php echo htmlspecialchars($usuario["nombre"]); ?>"/>

                <div class="label">
                  <label for="correo">Correo</label>
                  <p class="error">Campo obligatorio</p>
                </div>
                <input required type="text" id="correo" name="correo" 
                value="<?php echo htmlspecialchars($usuario["email"]); ?>"/>

                <div class="label">
                  <label for="distrito">Distrito</label>
                  <p class="error">Campo obligatorio</p>
                </div>
                <input required type="text" id="distrito" name="distrito"
                value="<?php echo htmlspecialchars($usuario["distrito"]); ?>"/>

              </div>

               <!-- Columna 2 -->
               <div class="form-column">

                <div class="label">
                  <label for="dni">DNI</label>
                  <p class="error">Campo obligatorio</p>
                </div>
                <input required type="text" id="dni" name="dni"
                value="<?php echo htmlspecialchars($usuario["dni"]); ?>"/>

                <div class="label">
                  <label for="celular">Celular</label>
                  <p class="error">Campo obligatorio</p>
                </div>
                <input required type="text" id="celular" name="celular"
                value="<?php echo htmlspecialchars($usuario["celular"]); ?>"/>
                </div>

            </div>
         </form>
         <div class="btns">
            <button id="paso1" class="next-stp" type="submit">Siguiente</button>
          </div>
        </div>
        <!-- Fin del paso 1 -->

        <!-- Inicio del paso 2 -->
        <div class="stp step-2">
          <div class="header">
            <h1 class="title">¿Estoy listo para adoptar?</h1>
            <p class="exp">Nos alegramos de que hayas tomado esta iniciativa.
              En Happy Pets, nos asegurarmos de que la adopción sea de manera responsable. 
              Por eso, antes de continuar considera lo siguiente:
            </p>
          </div>
          <form>
          <div class="form-container">
              <div class="form-column">
                <!-- Columna 1 -->
                <p>
                  <ol>
                    <li>Los perros y gatos tienen necesidades de salud como una nutrición adecuada, atención médica y paseos.</li><br>
                    <li>Al adoptar, asegúrate de tener el tiempo y los recursos necesarios para tu mascota.</li><br>
                    <li>Busca a tu próximo compañero basándote en su carácter y en el tuyo, así como en tu estilo de vida.</li><br>
                    <li>Considera dónde o con quién dejarlo cuando salgas de vacaciones y no puedas llevarlo contigo.</li><br>
                  </ol>
                </p>
              </div>
              <!-- Columna 2 -->
              <div class="form-column">
              <h1><?php echo $animalDetalles['nombre']; ?></h1>
                <figure>
                  <?php
                  echo "<img src='/HappyPets-ProyectoWeb/uploads/" . $animalDetalles['foto'] . "' alt='Imagen'><br>";
                  ?>
                </figure>
                <input required type="checkbox" id="miCheckbox" name="miCheckbox">
                <label class="condiciones" for="checkbox">He leido y soy consciente de las implicaciones de adoptar, continuar con el proceso de adopción.</label>
              </div>
          </div>
          </form>
          
          <div class="btns">
            <button class="prev-stp" type="button">Anterior</button>
            <button class="next-stp" type="submit">Siguiente</button>
          </div>
        </div>
        <!-- Fin del paso 2 -->
        <!-- Inicio del paso 3 -->
        <div class="stp step-3">
          <div class="header">
            <h1 class="title">Información básica</h1>
            <p class="exp">Preguntas básicas</p>
          </div>
          <form>
                <div class="pregunta">
                  <label for="vivienda">¿Tu vivienda es?</label><br>

                  <input type="radio" id="casa" name="vivienda">
                  <label for="casa">Casa</label><br>

                  <input type="radio" id="depa" name="vivienda">
                  <label for="depa">Departamento</label><br>
                </div>
                <div class="pregunta">
                  <label for="vivienda">¿Todas las personas en tu hogar están de acuerdo con adoptar?</label><br>
                  <input type="radio" id="casa" name="acuerdo">
                  <label for="opcion1">Sí</label><br>

                  <input type="radio" id="depa" name="acuerdo">
                  <label for="opcion2">No</label><br>
                </div>



                <div class="pregunta">
                  <label for="vivienda">¿Hay niños pequeños en tu vivienda?</label><br>
                  <input type="radio" id="casa" name="ninos">
                  <label for="opcion1">Sí</label><br>

                  <input type="radio" id="depa" name="ninos">
                  <label for="opcion2">No</label><br>
                </div>
                <div class="pregunta">
                  <label for="vivienda">¿Algún miembro de tu hogar tiene alergias a animales o problemas de salud que debamos tener en cuenta?</label><br>
                  <input type="radio" id="casa" name="alergias">
                  <label for="opcion1">Sí</label><br>

                  <input type="radio" id="depa" name="alergias">
                  <label for="opcion2">No</label><br>
                </div>
              
         
          </form>
          <div class="btns">
            <button class="prev-stp" type="button">Anterior</button>
            <button class="next-stp" type="submit">Siguiente</button>
          </div>
        </div>
        <!-- Step 3 end -->
        <!-- * Step 4 start -->
        <div class="stp step-4">

        <div class="mensaje-fin">
            <h1 class="title">Gracias por registrar tu solicitud</h1>
            <p class="gracias">
              Nos comunicaremos contigo en los próximos 15 días para coordinar 
              una visita al refugio y puedas conocer a tu futuro compañero peludo.
            </p>
        </div>
          
          <div class="btns">
            <button class="prev-stp" type="button">Anterior</button>
            <button form="formularioOculto" id="guardarForm1" class="next-stp" type="submit" name="procesar-solicitud">Finalizar</button>
          </div>
        </div>
        <script>
          document.getElementById('guardarForm1').addEventListener('click', function() {
            let nombreCapturado = document.getElementById('nombre').value;
            let correoCapturado = document.getElementById('correo').value;
            let dniCapturado = document.getElementById('dni').value;
            let celularCapturado = document.getElementById('celular').value;
            let distritoCapturado = document.getElementById('distrito').value;
            
            // Llenar los campos ocultos con los valores capturados
            document.getElementById('nombreHidden').value = nombreCapturado;
            document.getElementById('correoHidden').value = correoCapturado;
            document.getElementById('dniHidden').value = dniCapturado;
            document.getElementById('celularHidden').value = celularCapturado;
            document.getElementById('distritoHidden').value = distritoCapturado;

            // Enviar el formulario oculto al controlador
            document.getElementById('formularioOculto').submit();
          });
        </script>
        <!-- Step 4 end -->
      </div>
    </div>
    <script src="../../js/multiform.js"></script>
  </body>
</html>