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


        exit();
    } else {
        echo "Error al agregar el comentario: " . $conn->error;
    }

    $stmt->close();
}   

class comentario{
    private $conn;

    // Constructor para asignar la conexión a la propiedad $conn
    public function __construct($conn) {
        $this->conn = $conn;
    }


    public function listarComentarios() {
        $comentarios = [];
    
        $sql = "SELECT * FROM comentario";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $comentarios[] = $row;
            }
        }
    
        return  $comentarios;
    }

    public function eliminarComentario($codigo){
        $sql = "DELETE FROM comentario WHERE cod_com = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("s", $codigo); 
            $stmt->execute();
            
            if ($stmt->affected_rows > 0) {
                $stmt->close(); // Cierra la declaración preparada antes de salir de la función
                return true; 
            } else {
                echo "Error en la consulta: " . $stmt->error;
                $stmt->close(); // Cierra la declaración preparada en caso de error
                return false;
            }
        } else {
            return false; 
        }
    }

    }
?>