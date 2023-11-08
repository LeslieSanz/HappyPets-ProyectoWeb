<?php
require_once __DIR__ . '/../../controlador/animalControlador.php';
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
<body>
        <?php
            include "sidebar.php";
        ?>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Buscar aquí...">
            </div>
            
            <img src="../../../img/nosotros-img/Wal.jpg" alt="">
        </div>

        <div class="dash-content">

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Peluditos en adopción</span>
                    <a href="registrarAnimalitos.php" target="_blank">Agregar uno más</a>
                </div>
                
            <div class="activity-data">
            
                <table>
                    <thead>
                        <tr>
                            <th class="data-title">Nombre</th>
                            <th class="data-title">Especie</th>
                            <th class="data-title">Sexo</th>
                            <th class="data-title">Edad</th>
                            <th class="data-title">Tamaño</th>
                            <th class="data-title">Características</th>
                            <th class="data-title">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php foreach ($animales as $animal): ?>
                        <tr class="data">
                            <td class="data-list"><?php echo $animal['nombre']; ?></td>
                            <td class="data-list"><?php echo $animal['especie']; ?></td>
                            <td class="data-list"><?php echo $animal['sexo']; ?></td>
                            <td class="data-list"><?php echo $animal['edad']; ?></td>
                            <td class="data-list"><?php echo $animal['tamano']; ?></td>
                            <?php
                            // Obtener las palabras de la descripción
                            $palabras = explode(' ', $animal['caracteristicas']);
                            
                            // Limitar la cantidad de palabras a mostrar (por ejemplo, 20 palabras)
                            $caracteristicasLimitadas = implode(' ', array_slice($palabras, 0, 10));
                            ?>
                            <td class="data-list"><?php echo $caracteristicasLimitadas . '...'; ?></td>
                            
                            <?php $rutaImagen =   '../../../uploads/' . $animal['foto']; ?>
                            <td class="data-list"><a target="_blank" href="<?php echo $rutaImagen; ?>"><?php echo $animal['foto']; ?></a></td>        
                            <td class="data-button"><button class="boton-editar" onclick="animalEditar('<?=$animal['cod_aniAdo']?>')">Editar</button></td>
                            <td class="data-button"><button class="boton-eliminar" onclick="animalEliminar('<?=$animal['cod_aniAdo']?>')">Eliminar</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>

            <img src="../../img/dona-img/YapeWalter.PNG" alt="">
        </div>
    </section>
    
    <!--POPUP Agregar animal-->
    <section class="modal ">
        <div class="modal_container">
            <img src="../../img/dona-img/YapeWalter.PNG" alt="">
            <a href="#" class="modal_close">Cerrar</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="ajax.js"></script>
</body>
</html>