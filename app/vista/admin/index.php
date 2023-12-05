<?php
require_once __DIR__ . '/../../controlador/usuarioControlador.php';
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
        
            <img src="../../../img/nosotros-img/Wal.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Panel de control</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-solid fa-user"></i>
                        <span class="text">Total de usuarios</span>
                        <span class="number" id = "totalUsuarios">0</span>
                    </div>
                    <div class="box box2">
                        <i class="fa-solid fa-dog"></i>
                        <span class="text">Peluditos adoptados</span>
                        <span class="number" id = "peluditosAdopcion">0</span>
                    </div>
                    <div class="box box3">
                        <i class="fa-solid fa-cat"></i>
                        <span class="text">Peluditos reportados</span>
                        <span class="number" id = "peluditosReportados">0</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Lista de Usuarios</span>
                </div>
                
                <!--No borrar esto por si acaso-->

                <!-- <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div> -->
            <div class="activity-data">
            
                <table>
                    <thead>
                        <tr>
                            <th class="data-title">Código</th>
                            <th class="data-title">Nombre</th>
                            <th class="data-title">Email</th>
                            <th class="data-title">Celular</th>
                            <th class="data-title">DNI</th>
                            <th class="data-title">Distrito</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php foreach ($usuarios as $usuario): ?>
                        <tr class="data">
                            <td class="data-list"><?php echo $usuario['cod_usu']; ?></td>
                            <td class="data-list"><?php echo $usuario['nombre']; ?></td>
                            <td class="data-list"><?php echo $usuario['email']; ?></td>
                            <td class="data-list"><?php echo $usuario['celular']; ?></td>
                            <td class="data-list"><?php echo $usuario['dni']; ?></td>
                            <td class="data-list"><?php echo $usuario['distrito']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="ajax.js"></script>
    <script src="admin.js"></script>
</body>
</html>