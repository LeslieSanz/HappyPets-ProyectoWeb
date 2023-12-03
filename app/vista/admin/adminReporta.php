<?php
require_once __DIR__ . '/../../controlador/reporteControlador.php';
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
                    <span class="text">Peluditos en reportados</span>
                </div>
                
            <div class="activity-data">
            
                <table>
                    <thead>
                        <tr>
                            <th class="data-title">Codigo</th>
                            <th class="data-title">Distrito</th>
                            <th class="data-title">Referencia</th>
                            <th class="data-title">Direccion</th>
                            <th class="data-title">Informacional Adiconal</th>
                            <th class="data-title">Codigo usuario</th>
                            <th class="data-title">Especie</th>
                            <th class="data-title">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php foreach ($lista_reporte as $lista): ?>
                        <tr class="data">
                            <td class="data-list"><?php echo $lista['cod_rep']; ?></td>
                            <td class="data-list"><?php echo $lista['distrito']; ?></td>
                            <td class="data-list"><?php echo $lista['referencia']; ?></td>
                            <td class="data-list"><?php echo $lista['direccion']; ?></td>
                            <td class="data-list"><?php echo $lista['info_adicional']; ?></td>
                            <td class="data-list"><?php echo $lista['cod_usu']; ?></td>
                            <td class="data-list"><?php echo $lista['especie']; ?></td>
                            
                            <?php $rutaImagen =   '../../../uploads/' . $lista['foto']; ?>
                            <td class="data-list"><a target="_blank" href="<?php echo $rutaImagen; ?>"><?php echo $lista['foto']; ?></a></td>        
                        



                            <td class="data-button"><button class="boton-eliminar" onclick="animalEliminar('<?=$lista['cod_rep']?>')">Eliminar</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>

            <img src="../../img/dona-img/YapeWalter.PNG" alt="">
        </div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="reporta.js"></script>
    <script src="script.js"></script>
    </body>
    
</html>