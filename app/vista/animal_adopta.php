<?php
session_start();
require_once __DIR__ . '/../controlador/animalControlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>
<body>
    <!--Datos de prueba-->
    <h1><?php echo $animalDetalles['cod_aniAdo']; ?></h1>
    <h1><?php echo $animalDetalles['nombre']; ?></h1>
    <p>Especie: <?php echo $animalDetalles['especie']; ?></p>
    <a target="_blank" href="form-adopta.php?codigo=<?php echo $animalDetalles['cod_aniAdo']; ?>">Adóptame</a>
    <?php echo '<li><a href="#"> Bienvenido '.$_SESSION["cod_usu"].'</a></li>'?>
</body>
</html>