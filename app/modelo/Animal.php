<?php
require_once __DIR__ . '/../config/database.php';

class Animal {

    private $conn;


    public function __construct($conn) {
        $this->conn = $conn;
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
