<?php
require_once __DIR__ . '/../../controlador/adoptaControlador.php';
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
                    <span class="text">Solicitudes de adopción</span>
                </div>
                
            <div class="activity-data">
            
                <table>
                    <thead>
                        <tr>
                            <th class="data-title">Código</th>
                            <th class="data-title">Fecha</th>
                            <th class="data-title">Estado</th>
                            <th class="data-title">Usuario</th>
                            <th class="data-title">Animal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($solicitudes as $solicitud): ?>
                        <tr class="data">
                            <td class="data-list"><?php echo $solicitud['cod_ado']; ?></td>
                            <td class="data-list"><?php echo $solicitud['fecha_solicitud']; ?></td>
                            <?php if ($solicitud["estado"] == 'pendiente'): ?>
                                <td class="data-button"><button class="boton-danger" onclick="cambiarEstadoSolicitud('<?=$solicitud['cod_ado']?>')">Pendiente</button></td>
                            <?php else: ?>
                                <td class="data-button"><button class="boton-success" onclick="cambiarEstadoSolicitud('<?=$solicitud['cod_ado']?>')">Aprobada</button></td>
                            <?php endif; ?>

                            <td class="data-list"><?php echo $solicitud['cod_usu']; ?></td>
                            <td class="data-list"><?php echo $solicitud['cod_aniAdo']; ?></td>
                            
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
    <script src="animales.js"></script>

</body>
</html>