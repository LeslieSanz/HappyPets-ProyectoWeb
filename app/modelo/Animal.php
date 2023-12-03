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
                return true; 
            } else {
                echo "Error en la consulta: " . $stmt->error;
                return false; 
            }
            $stmt->close();
        } else {
            return false; 
        }
    }

    public function eliminarAnimal($codigo) {
        $sql = "DELETE FROM animal_adopta WHERE cod_aniAdo = ?";
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
    
    

    public function listarUnAnimal($codigo){
        $animal = null;
    
        // Preparar la consulta SQL con un parámetro
        $stmt = $this->conn->prepare("SELECT * FROM animal_adopta WHERE cod_aniAdo = ?");
        $stmt->bind_param("s", $codigo); // "s" indica que el parámetro es una cadena
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $animal = $result->fetch_assoc();
        }
    
        return $animal;
    }

    public function listarAnimales() {
        $animales = [];
    
        $sql = "SELECT * FROM animal_adopta WHERE disponibilidad = 'Sí'";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animales[] = $row;
            }
        }
    
        return $animales;
    }

    public function listarAnimalesAdoptados() {
        $animalesAdoptados = [];
    
        $sql = "SELECT * FROM animal_adopta WHERE disponibilidad = 'No' LIMIT 4";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animalesAdoptados[] = $row;
            }
        }
    
        return $animalesAdoptados;
    }

    public function actualizarAnimal($nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$foto,$codigo) {
        $sql = "UPDATE animal_adopta SET nombre = ?,especie = ?,sexo = ?,edad = ?, tamano = ?, caracteristicas = ?, razon = ?, foto = ? WHERE cod_aniAdo = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("sssssssss", $nombre,$especie,$sexo,$edad,$tamano,$caracteristicas,$razon,$foto,$codigo);
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

    public function filtroAnimales($filtro) {
        $animales = [];
    
        $sql = "SELECT * FROM animal_adopta WHERE disponibilidad = 'Sí' AND $filtro";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animales[] = $row;
            }
        }
    
        return $animales;
    }

}
