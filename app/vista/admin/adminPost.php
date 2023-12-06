<?php
require_once __DIR__ . '/../../controlador/postControlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/09bca36bc3.js" crossorigin="anonymous"></script>
    <script src="../../../js/donaciones.js"></script>

    <title>Panel de control</title> 
    <link rel="icon" href = "../../../img/logos/logopets.png" type = "image/x-icon">
</head>
<body>
        <?php
            include "sidebar.php";
        ?>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
            <img src="../../../img/nosotros-img/Wal.jpg" alt="">
        </div>

        <div class="dash-content">

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Posts</span>
                    <!-- <a href="registrarAnimalitos.php" target="_blank">Agregar uno más</a> -->
                    <a href="#" class="hero_cta">Añadir un post</a>
                </div>
                
            <div class="activity-data">
            
                <table>
                    <thead>
                        <tr>
                            <th class="data-title">Codigo</th>
                            <th class="data-title">Categoria</th>
                            <th class="data-title">Titulo</th>
                            <th class="data-title">Contenido</th>
                            <th class="data-title">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php foreach ($posts as $post): ?>
                        <tr class="data">
                            <td class="data-list"><?php echo $post['cod_post']; ?></td>
                            <td class="data-list"><?php echo $post['categoria']; ?></td>
                            <td class="data-list"><?php echo $post['titulo']; ?></td>

                            <?php
                            // Obtener las palabras de la descripción
                            $palabras = explode(' ', $post['contenido']);
                            
                            // Limitar la cantidad de palabras a mostrar (por ejemplo, 20 palabras)
                            $caracteristicasLimitadas = implode(' ', array_slice($palabras, 0, 10));
                            ?>
                            <td class="data-list"><?php echo $caracteristicasLimitadas . '...'; ?></td>
                            
                            <?php $rutaImagen =   '../../../uploads/' . $post['foto']; ?>
                            <td class="data-list"><a target="_blank" href="<?php echo $rutaImagen; ?>"><?php echo $post['foto']; ?></a></td>        
                            <td class="data-button">
                        
                            </td>
                            <td class="data-button"><button class="boton-eliminar" onclick="postEliminar('<?=$post['cod_post']?>')">Eliminar</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>
            
        </div>
    </section>
     <!--POPUP REGISTRAR ANIMAL-->
     <section class="modal" id="miModal">

<div class="modal_container">

<div class="modal-header">
    <h1>Escribir post</h1>
    <a href="#" class="modal_close">X</a>
</div>


<form action="../../controlador/postControlador.php" method="post" enctype="multipart/form-data">
    <div class="form-container">

            <div class="form-column">
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" required><br><br>

                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="Adopcion">Adopción</option>
                    <option value="Curiosidades">Curiosidades</option>
                    <option value="Vida Saludable">Vida saludable</option>
                    <option value="Noticias">Noticias</option>
                </select><br><br>
 
            <div class="form-column">
                <label for="contenido">Contenido:</label><br>
                <textarea id="contenido" name="contenido" rows="4" cols="50" required></textarea><br><br>

                <label for="foto">Subir foto:</label>
                <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

                <input type="submit" value="Ingresar" name="RegistrarPost">
            </div>
         </div>
    </form> 

<!--POPUP EDITAR ANIMAL-->
   
<section class="modalEditar" id="miModal">

<div class="modal_container">

<div class="modal-header">
    <h1>Editar post </h1>
    <a href="#" class="modal_close" id="close">X</a>
</div>


<form action="../../controlador/postControlador.php" method="post" enctype="multipart/form-data">
    <div class="form-container">

            <div class="form-column">
                <input type="hidden" id="codigo-secreto" name="codigo-secreto">
                <label for="titulo-editar">Titulo:</label>
                <input type="text" id="titulo-editar" name="titulo-editar" required><br><br>
                
                <label for="categoria-editar">Categoria:</label>
                <select id="categoria-editar" name="categoria-editar" required>
                <option value="Adopcion">Adopción</option>
                    <option value="Curiosidades">Curiosidades</option>
                    <option value="Vida Saludable">Vida saludable</option>
                    <option value="Noticias">Noticias</option>
                </select><br><br>



            </div>
            <div class="form-column">
                <label for="contenido-editar">Contenido:</label><br>
                <textarea id="contenido-editar" name="contenido-editar" rows="4" cols="50" required></textarea><br><br>

                <label for="foto-editar">Actualizar foto:</label>
                <input type="file" id="foto-editar" name="foto-editar" accept="image/*"><br><br>

                <input type="submit" value="Guardar" name="ActualizarPost">
            <!-- <img id="imagen" src="" alt="Imagen"> -->
            </div>
            
    </div>
</form> 


</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="post.js"></script>
    <script src="script.js"></script>
    </body>
    
</html>