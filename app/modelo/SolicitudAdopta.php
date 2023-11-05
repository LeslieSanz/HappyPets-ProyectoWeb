<?php
require_once __DIR__ . '/../config/database.php';

class SolicitudAdopta {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarSolicitudAdopta($cod_usu, $cod_ani){
        $sql = "INSERT INTO adopcion (fecha_solicitud, estado, cod_usu, cod_aniAdo) VALUES (NOW(),'pendiente',?,?)";
        $stmt = $this->conn->prepare($sql);

        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("ss", $cod_usu, $cod_ani);
            $stmt->execute();

            // Verificar si la inserción fue exitosa
            if ($stmt->affected_rows > 0) {
                return true; 
            } else {
                // Mostrar el mensaje de error específico de MySQL
                echo "Error en la consulta: " . $stmt->error;
                return false; // Error al ejecutar la consulta
            }

            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            return false; 
        }
    }
}