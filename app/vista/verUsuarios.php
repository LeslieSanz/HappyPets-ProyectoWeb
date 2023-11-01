<!--verUsuarios.php-->
<?php
require_once __DIR__ . '/../controlador/animalControlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link   rel="stylesheet" href="../../css/styleAdopta.css"/>
</head>
<body>
        <section class="container">
                <div class="card-container">
                    <?php foreach ($animales as $animal): ?>
                    <div class="card">
                        <figure>
                        <?php
                        echo "<img src='/HappyPets-ProyectoWeb/uploads/" . $animal['foto'] . "' alt='Imagen'><br>";
                        ?>
                        </figure>
                        <div class="contenido">
                            <h3><?php echo $animal['cod_ani']; ?></h3>
                            <p><?php echo $animal['especie']; ?></p>
                            <a href="#">Leer Más</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
        </section>
</body>
</html>