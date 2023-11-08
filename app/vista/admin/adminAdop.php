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
                            <td class="data-list"><?php echo $solicitud['estado']; ?></td>
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
    
</body>
</html>