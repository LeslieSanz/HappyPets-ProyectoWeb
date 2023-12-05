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
                    <span class="text">Peluditos en adopción</span>
                    <!-- <a href="registrarAnimalitos.php" target="_blank">Agregar uno más</a> -->
                    <a href="#" class="hero_cta">Registrar uno</a>
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
                            <td class="data-button">
                                <button 
                                        class="boton-editar" 
                                        data-codigo="<?php echo $animal['cod_aniAdo']; ?>"      
                                        data-toggle= "modal" >Editar
                                </button>
                            </td>
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
    
    <!--POPUP REGISTRAR ANIMAL-->
    <section class="modal" id="miModal">

        <div class="modal_container">
        
        <div class="modal-header">
            <h1>Registro de animales en adopción</h1>
            <a href="#" class="modal_close">X</a>
        </div>

        
        <form action="../../controlador/animalControlador.php" method="post" enctype="multipart/form-data">
            <div class="form-container">

                    <div class="form-column">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>

                        <label for="especie">Especie:</label>
                        <select id="especie" name="especie" required>
                            <option value="Felino">Felino</option>
                            <option value="Canino">Canino</option>
                        </select><br><br>

                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" required>
                            <option value="Hembra">Hembra</option>
                            <option value="Macho">Macho</option>
                        </select><br><br>

                        <label for="edad">Edad:</label>
                        <select id="edad" name="edad" required>
                            <option value="0-6 meses">0 a 6 meses</option>
                            <option value="6-12 meses">6 a 12 meses</option>
                            <option value="1-2 años">1 a 2 años</option>
                            <option value="2-4 años">2 a 4 años</option>
                            <option value="Más de 4 años">Más de 4 años</option>
                        </select><br><br>

                        <label for="tamano">Tamaño:</label>
                        <select id="tamano" name="tamano" required>
                            <option value="pequeño">Pequeño</option>
                            <option value="mediano">Mediano</option>
                            <option value="grande">Grande</option>
                        </select><br><br>
                    </div>
                    
                    <div class="form-column">
                        <label for="caracteristicas">Características:</label><br>
                        <textarea id="caracteristicas" name="caracteristicas" rows="4" cols="50" required></textarea><br><br>

                        <label for="razon">Razón:</label><br>
                        <textarea id="razon" name="razon" rows="4" cols="50" required></textarea><br><br>

                        <label for="foto">Subir foto:</label>
                        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

                        <input type="submit" value="Ingresar" name="RegistrarAnimal">
                    </div>
                 </div>
            </form> 
        </div>
    </section>

    <!--POPUP EDITAR ANIMAL-->
   
    <section class="modalEditar" id="miModal">

            <div class="modal_container">

            <div class="modal-header">
                <h1>Editar animales en adopción</h1>
                <a href="#" class="modal_close" id="close">X</a>
            </div>


            <form action="../../controlador/animalControlador.php" method="post" enctype="multipart/form-data">
                <div class="form-container">

                        <div class="form-column">
                            <input type="hidden" id="codigo-secreto" name="codigo-secreto">
                            <label for="nombre-editar">Nombre:</label>
                            <input type="text" id="nombre-editar" name="nombre-editar" required><br><br>
                            
                            <label for="especie-editar">Especie:</label>
                            <select id="especie-editar" name="especie-editar" required>
                                <option value="Felino">Felino</option>
                                <option value="Canino">Canino</option>
                            </select><br><br>

                            <label for="sexo-editar">Sexo:</label>
                            <select id="sexo-editar" name="sexo-editar" required>
                                <option value="Hembra">Hembra</option>
                                <option value="Macho">Macho</option>
                            </select><br><br>

                            <label for="edad-editar">Edad:</label>
                            <select id="edad-editar" name="edad-editar" required>
                                <option value="0-6 meses">0 a 6 meses</option>
                                <option value="6-12 meses">6 a 12 meses</option>
                                <option value="1-2 años">1 a 2 años</option>
                                <option value="2-4 años">2 a 4 años</option>
                                <option value="Más de 4 años">Más de 4 años</option>
                            </select><br><br>

                            <label for="tamano-editar">Tamaño:</label>
                            <select id="tamano-editar" name="tamano-editar" required>
                                <option value="pequeño">Pequeño</option>
                                <option value="mediano">Mediano</option>
                                <option value="grande">Grande</option>
                            </select><br><br>
                        </div>
                        <div class="form-column">
                            <label for="caracteristicas-editar">Características:</label><br>
                            <textarea id="caracteristicas-editar" name="caracteristicas-editar" rows="4" cols="50" required></textarea><br><br>

                            <label for="razon-editar">Razón:</label><br>
                            <textarea id="razon-editar" name="razon-editar" rows="4" cols="50" required></textarea><br><br>

                            <label for="foto-editar">Actualizar foto:</label>
                            <input type="file" id="foto-editar" name="foto-editar" accept="image/*"><br><br>

                            <input type="submit" value="Guardar" name="ActualizarAnimal">
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
    <script src="animales.js"></script>
    <script src="script.js"></script>
    </body>
    
</html>