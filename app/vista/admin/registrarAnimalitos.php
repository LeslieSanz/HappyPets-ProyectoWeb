<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de prueba</title>
</head>
<body>
    <h1>Registro de animales en adopcion</h1>
    <form action="../../controlador/animalControlador.php" method="post" enctype="multipart/form-data">
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

        <label for="caracteristicas">Características:</label><br>
        <textarea id="caracteristicas" name="caracteristicas" rows="4" cols="50" required></textarea><br><br>

        <label for="razon">Razón:</label><br>
        <textarea id="razon" name="razon" rows="4" cols="50" required></textarea><br><br>

        <label for="foto">Subir Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <input type="submit" value="Ingresar" name="RegistrarAnimal">
    </form>
    <script src="script.js"></script>
</body>
</html>