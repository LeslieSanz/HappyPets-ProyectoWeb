<?php
require_once __DIR__ . '/../config/database.php';
// Obtener la lista de comentarios
$sql = "SELECT cod_com, contenido, fecha_publi FROM comentario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comentario'>";
        echo "Contenido: {$row['contenido']}<br>";
        echo "Fecha de publicación: {$row['fecha_publi']}<br>";
        echo "</div>";
    }
} else {
    echo "No hay comentarios aún.";
}
?>