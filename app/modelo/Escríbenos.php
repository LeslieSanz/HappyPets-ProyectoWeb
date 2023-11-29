<?php
session_start();

//Importar de la carpeta config el archivo data base
require_once __DIR__ . '/../config/database.php';

Class Contacto {

    private $conn;

    // Constructor para asignar la conexión a la propiedad $conn
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarContacto($nombre, $email, $telefono, $asunto, $mensaje) {
        $sql = "INSERT INTO contacto (nombre, email, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
             //las s son por es STRING
            $stmt->bind_param("sssss", $nombre, $email, $telefono, $asunto, $mensaje);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
               return true; // Contacto agregado exitosamente
             } else {
                 echo "Error en la consulta: " . $stmt->error;
                 return false; // Error al agregar el contacto
                 }

             $stmt->close();
        } else {
            return false; // Error al preparar la consulta
        }
    }

    public function listarContactos() {
        $contactos = [];
    
        $sql = "SELECT * FROM contacto";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $contactos[] = $row;
            }
        }
    
        return  $contactos;
    }

}
?>