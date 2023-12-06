<?php
require_once __DIR__ . '/../../controlador/depositameControlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleAdopta.css" />
    
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

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Solicitudes de donaciones</span>
                </div>
                <form id="form-donaciones" name="form-donaciones" method="post">
                <p>Aplique el filtro que desee</p>
                <label for="tipo-donacion">Tipo de Donaciones:</label>
                        <select class="select" id="tipo-donacion" name="tipo-donacion">
                            <option value="monetaria">Monetario</option>
                            <option value="alimentos">Alimento</option>
                            <option value="articulos">Articulos</option>
                        </select>
                        <button class="buscar" type="submit" name= "buscar" >Buscar</button>    
                </form>
                
            <div class="activity-data">

            <table>
                <thead>
                    <tr>
                        <?php if ($tipo_donacion == ''): ?>
                            
                        <?php elseif ($tipo_donacion == 'monetaria'): ?>
                            <th class="data-title">Código de donación</th>
                            <th class="data-title">Tipo de donación</th>
                            <th class="data-title">Nombres y apellidos</th>
                            <th class="data-title">Monto</th>
                            <th class="data-title">Número de la tarjeta</th>
                        <?php elseif ($tipo_donacion == 'alimentos'): ?>
                            <th class="data-title">Código de donación</th>
                            <th class="data-title">Tipo de donación</th>
                            <th class="data-title">Nombres y apellidos</th>
                            <th class="data-title">Número de contacto</th>
                            <th class="data-title">Dirección</th>
                            <th class="data-title">Tipo de alimento</th>
                            <th class="data-title">Tipo de alimento por edad</th>
                            <th class="data-title">Marca</th>
                            <th class="data-title">Peso</th>
                        <?php elseif ($tipo_donacion == 'articulos'): ?>
                            <th class="data-title">Código de donación</th>
                            <th class="data-title">Tipo de donación</th>
                            <th class="data-title">Nombres y apellidos</th>
                            <th class="data-title">Número de contacto</th>
                            <th class="data-title">Dirección</th>
                            <th class="data-title">Tipo de articulo</th>
                            <th class="data-title">Descripción</th>
                        <?php else: ?>
                            <p>No se ha seleccionado un tipo válido de donación.</p>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($tipo_donacion == 'monetaria'): ?>
                        <?php foreach ($donaciones as $deposito): ?>
                            <tr class="data">
                                <td class="data-list"><?php echo $deposito['cod_don']; ?></td>
                                <td class="data-list"><?php echo $deposito['tipoDonacion']; ?></td>
                                <td class="data-list"><?php echo $deposito['nombre']; ?></td>
                                <td class="data-list"><?php echo $deposito['monto']; ?></td>
                                <td class="data-list"><?php echo $deposito['tarnum']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($tipo_donacion == 'alimentos'): ?>
                        <?php foreach ($alimentos as $deposito): ?>
                            <tr class="data">
                                <td class="data-list"><?php echo $deposito['cod_don']; ?></td>
                                <td class="data-list"><?php echo $deposito['tipoDonacion']; ?></td>
                                <td class="data-list"><?php echo $deposito['nombre']; ?></td>
                                <td class="data-list"><?php echo $deposito['numContact']; ?></td>
                                <td class="data-list"><?php echo $deposito['direccion']; ?></td>
                                <td class="data-list"><?php echo $deposito['tAlimento']; ?></td>
                                <td class="data-list"><?php echo $deposito['tEdad']; ?></td>
                                <td class="data-list"><?php echo $deposito['marca']; ?></td>
                                <td class="data-list"><?php echo $deposito['peso']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($tipo_donacion == 'articulos'): ?>
                        <?php foreach ($articulos as $deposito): ?>
                        <tr class="data">
                                <td class="data-list"><?php echo $deposito['cod_don']; ?></td>
                                <td class="data-list"><?php echo $deposito['tipoDonacion']; ?></td>
                                <td class="data-list"><?php echo $deposito['nombre']; ?></td>
                                <td class="data-list"><?php echo $deposito['numContact']; ?></td>
                                <td class="data-list"><?php echo $deposito['direccion']; ?></td>
                                <td class="data-list"><?php echo $deposito['tArticulo']; ?></td>
                                <td class="data-list"><?php echo $deposito['desArticulo']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
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
    <script src="script.js"></script>

</body>
</html>