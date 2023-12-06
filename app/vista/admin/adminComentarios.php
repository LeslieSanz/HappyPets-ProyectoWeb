<?php
require_once __DIR__ . '/../../controlador/ComentarioControlador.php';
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

    <title>Panel de control</title> 
    <link rel="icon" href = "../../../img/logos/logopets.png" type = "image/x-icon">
</head>
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
                    <span class="text">Comentarios</span>
                </div>
    
        <div class="activity-data">

            <table>
                <thead>
                     <tr>
                        <th class="data-title">Código</th>
                        <th class="data-title">Fecha</th>
                        <th class="data-title">Comentario</th>
                        <th class="data-title">Codigo de usuario</th>
                        <th class="data-title"></th>
                    </tr>
                </thead>
                <tbody>
        
                    <?php foreach ($comentarios as $comentario): ?>
                    <tr class="data">
                        <td class="data-list"><?php echo $comentario['cod_com']; ?></td>
                        <td class="data-list"><?php echo $comentario['fecha_publi']; ?></td>
                        <td class="data-list"><?php echo $comentario['contenido']; ?></td>
                        <td class="data-list"><?php echo $comentario['cod_usu']; ?></td>
                        
                        <td class="data-button"><button class="boton-eliminar" onclick="comentarioEliminar('<?=$comentario['cod_com']?>')">Eliminar</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
         </table>
        </div>
        </div>
    </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="comentario.js"></script>
    <script src = "script.js"></script>

</body>
</html>