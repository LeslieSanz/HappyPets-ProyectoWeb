<?php
require_once __DIR__ . '/../config/database.php';

class Animal {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarAnimal($nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$foto){
        $sql = "INSERT INTO animal_adopta(nombre,especie,sexo,edad,tamano,caracteristicas,razon,foto) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("ssssssss", $nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$foto);
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

    public function listarAnimales() {
        $animales = [];
    
        $sql = "SELECT * FROM animal_adopta";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animales[] = $row;
            }
        }
    
        return $animales;
    }

    public function filtroAnimales($filtro) {
        $animales = [];
    
        $sql = "SELECT * FROM animal_adopta WHERE $filtro";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animales[] = $row;
            }
        }
    
        return $animales;
    }

}
