<?php
require_once __DIR__ . '/../config/database.php';

class Deposito {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarDeposito($monto,$nombre,$tarnum){
        $sql = "INSERT INTO donacion(monto,nombre,tarnum) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("sss", $monto,$nombre,$tarnum);
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

    public function agregarAlimento($numero,$nombre,$direccion,$tAlimento,$tEdad,$tMarca,$peso){
        $sql = "INSERT INTO donacion(numContact,nombre,direccion,tAlimento,tEdad,marca,peso) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("sssssss", $numero,$nombre,$direccion,$tAlimento,$tEdad,$tMarca,$peso);
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

    public function agregarArticulo($numero,$nombre,$direccion,$tArticulo,$descripcion){
        $sql = "INSERT INTO donacion(numContact,nombre,direccion,tArticulo,desArticulo) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("sssss", $numero,$nombre,$direccion,$tArticulo,$descripcion);
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
    

    public function listarDeposito($codigo){
        $animal = null;
    
        // Preparar la consulta SQL con un parámetro
        $stmt = $this->conn->prepare("SELECT * FROM donacion WHERE cod_don = ?");
        $stmt->bind_param("s", $codigo); // "s" indica que el parámetro es una cadena
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $depositame = $result->fetch_assoc();
        }
    
        return $depositame;
    }

    public function listarDepositos() {
        $depositos = [];
    
        $sql = "SELECT * FROM donacion";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $depositos[] = $row;
            }
        }
    
        return $depositos;
    }

    public function filtroDepositos($filtro) {
        $depositos = [];
    
        $sql = "SELECT * FROM donacion WHERE $filtro";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $depositos[] = $row;
            }
        }
    
        return $depositos;
    }

}
