<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comentario = $_POST['comentario'];
    $codigo_usuario = $_SESSION['cod_usu']; // Asegúrate de tener este valor disponible

    // Insertar el comentario en la base de datos
    $stmt = $conn->prepare("INSERT INTO comentario (fecha_publi, contenido, cod_usu) VALUES (NOW(), ?, ?)");
    $stmt->bind_param("ss",  $comentario, $codigo_usuario);

    if ($stmt->execute()) {
        // Obtener el último comentario
        $sql = "SELECT * FROM comentario ORDER BY cod_com DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo "<div class='comentario'>";
        echo "<span class='usuario'>" . $row['cod_usu'] . "<br>";
        echo "<span class='fecha'>" . $row['fecha_publi'] . "<br>";
        echo "<div class='contenido'>" . $row['contenido'] . "<br>";
        echo "</div>";
        exit();
    } else {
        echo "Error al agregar el comentario: " . $conn->error;
    }

    $stmt->close();
}
?>