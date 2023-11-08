<?php
require_once __DIR__ . '/../../controlador/animalControlador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de animalitos</title>
</head>
<body>
    <h1>Lista animalitos</h1>
    <a href="registrarAnimalitos.php" target="_blank">Agregar uno más</a>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Tamaño</th>
                <th>Caracteristicas</th>
                <th>Razón para adoptar</th>
                <th>Foto</th>
            </tr>
            <?php foreach ($animales as $animal): ?>
            <tr>
                <td><?php echo $animal['nombre']; ?></td>
                <td><?php echo $animal['especie']; ?></td>
                <td><?php echo $animal['sexo']; ?></td>
                <td><?php echo $animal['edad']; ?></td>
                <td><?php echo $animal['tamano']; ?></td>
                <td><?php echo $animal['caracteristicas']; ?></td>
                <td><?php echo $animal['razon']; ?></td>
                <?php $rutaImagen =   '../../../uploads/' . $animal['foto']; ?>
                <td><a target="_blank" href="<?php echo $rutaImagen; ?>"><?php echo $animal['foto']; ?></a></td>        
                <button class=".btn"><a href="#">Editar</a></button>
                <button class=".btn"><a href="#">Eliminar</a></button>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>