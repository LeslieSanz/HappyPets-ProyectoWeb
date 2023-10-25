<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comentario = $_POST['comentario'];

    // Validar el comentario si es necesario

    // Insertar el comentario en la base de datos
    $stmt = $conn->prepare("INSERT INTO comentario (fecha_publi, contenido) VALUES (NOW(), ?)");
    $stmt->bind_param("s", $comentario);

    if ($stmt->execute()) {
        // Obtener el último comentario
        $sql = "SELECT * FROM comentario ORDER BY cod_com DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "<div class='comentario'>";
        echo "Contenido: " . $row['contenido'] . "<br>";
        echo "Fecha de publicación: " . $row['fecha_publi'] . "<br>";
        echo "</div>";
        exit();
    } else {
        echo "Error al agregar el comentario: " . $conn->error;
    }

    $stmt->close();
}
?>