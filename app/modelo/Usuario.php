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

        // Método para obtenerUsuarioPorCodigoDeUsuario
    public function obtenerUsuarioPorCodUsu($cod_usu) {
        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE cod_usu = ?");
        $stmt->bind_param("s", $cod_usu);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_object();
            return $usuario;
        } else {
            return null;
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

    public function buscarUsuario($id) {
        $usuario = null;
    
        // Preparar la consulta SQL con un parámetro
        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" indica que el parámetro es un entero
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
        }
    
        return $usuario;
    }

    public function actualizarUsuario($nombre,$correo,$dni,$celular,$distrito,$foto) {
        $sql = "UPDATE usuario SET nombre = ?,email = ?,dni = ?,celular = ?, distrito = ?, foto = ? where cod_usu = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Verificar si la consulta preparada se ejecutó correctamente
        $codigo=$_SESSION['cod_usu']; //sacamos el codigo del usuario para actualizarlo a este webonaso

        if ($stmt) {
            $stmt->bind_param("sssssss", $nombre, $correo, $dni, $celular, $distrito, $foto, $codigo);
            $stmt->execute();
        
            // Verificar si la actualización fue exitosa
            if ($stmt->affected_rows > 0) {
                return true; // Usuario actualizado exitosamente
            } else {
                // Mostrar el mensaje de error específico de MySQL
                echo "Error en la consulta: " . $stmt->error;
                return false; // Error al ejecutar la consulta
            }
        
            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            return false; // Error al preparar la consulta
        }
    } 
}


$clave="m3m0c0d3";

function encriptar($string, $key){
    $result = '';
    for($i = 0; $i < strlen($string); $i++){
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key)) - 1, 1);
    $char = chr(ord($char) + ord($keychar));
    $result .= $char;
    }
    return base64_encode($result);
    }
    
    function desencriptar($string, $key){
    $result = '';
    $string = base64_decode($string);
    for($i = 0; $i < strlen($string); $i++){
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key)) - 1, 1);
    $char = chr(ord($char) - ord($keychar));
    $result .= $char;
    }
    return $result;
    }


?>
