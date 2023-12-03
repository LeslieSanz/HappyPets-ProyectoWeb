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

    public function listarUnaSolicitud($cod_ado){
        $stmt = $this->conn->prepare("SELECT * FROM adopcion WHERE cod_ado = ?");
        $stmt->bind_param("s", $cod_ado);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Devolver un array asociativo en lugar de un objeto
            $solicitud = $result->fetch_assoc();
            $stmt->close(); // Cerrar la declaración preparada
            return $solicitud;
            var_dump($solicitud);
        } else {
            $stmt->close(); // Cerrar la declaración preparada en caso de que no haya resultados
            return null;
        }
    }

    public function modificarEstadoSolicitud($cod_ado){
        $solicitud = $this->listarUnaSolicitud($cod_ado);

        if($solicitud["estado"]=='pendiente'){
            $sql = "UPDATE adopcion SET estado = 'aprobada' WHERE cod_ado = ?";
        }else if($solicitud["estado"]=='aprobada'){
            $sql = "UPDATE adopcion SET estado = 'pendiente' WHERE cod_ado = ?";
        }
        $stmt = $this->conn->prepare($sql);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("s", $cod_ado);
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

    public function listarSolicitudes() {
        $solicitudes = [];
    
        $sql = "SELECT * FROM adopcion";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $solicitudes[] = $row;
            }
        }
    
        return  $solicitudes;
    }
}