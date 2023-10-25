<!--verUsuarios.php-->
<?php
require_once __DIR__ . '/../controlador/usuarioControlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border='1'>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['password']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>

</body>
</html>
