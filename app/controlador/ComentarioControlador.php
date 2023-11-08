<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Comentario.php';


// Verificar si el usuario está logeado
if(isset($_SESSION['cod_usu'])){
    $codigo_usuario = $_SESSION['cod_usu'];

    // Obtener la lista de comentarios
    $sql = "SELECT c.cod_com, c.contenido, c.fecha_publi, c.cod_usu, u.nombre 
            FROM comentario c 
            INNER JOIN usuario u ON c.cod_usu = u.cod_usu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='comentario'>";
            echo "<span class='usuario'>" . $row['nombre'] . "<br>";
            echo "<span class='fecha'>" . $row['fecha_publi'] . "</span>";
            echo "<div class='contenido'>" . $row['contenido'] . "</div>";
            echo "</div>";
        }
    } else {
        echo "No hay comentarios aún.";
    }
} else {
    echo "Usuario no logeado";
}
?>