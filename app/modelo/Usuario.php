<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {

    private $conn;


    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarUsuario($usuario, $email, $password) {
        $sql = "INSERT INTO usuario (nombre, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("sss", $usuario, $email, $password);
            $stmt->execute();

            // Verificar si la inserción fue exitosa
            if ($stmt->affected_rows > 0) {
                return true; // Usuario agregado exitosamente
            } else {
                return false; // Error al agregar el usuario
            }

            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            return false; // Error al preparar la consulta
        }
    }

    // Método para validar el inicio de sesión
    public function validarLogin($usuario, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE nombre = ? AND password = ?");
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $datos = $result->fetch_object();
            return $datos;
        } else {
            return null;
        }
    }

    public function listarUsuarios() {
        $usuarios = [];
    
        $sql = "SELECT * FROM usuario";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
            }
        }
    
        return $usuarios;
    }
    
}
?>
