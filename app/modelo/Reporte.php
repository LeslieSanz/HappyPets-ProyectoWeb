<?php

session_start();

//Importar de la carpeta config el archivo data base
require_once __DIR__ . '/../config/database.php';

class Reporte {

    private $conn;

    // Constructor para asignar la conexión a la propiedad $conn
    public function __construct($conn) {
        $this->conn = $conn;
    }



    //CRUD
    public function codigoAnimal($especie, $foto){
         
        $cod_ani = "";
        
        $sql = "SELECT cod_ani FROM animal_reporta WHERE especie = ? AND foto = ?";
        $stmt = $this->conn->prepare($sql);

        


        // Verificar si la consulta preparada se ejecutó correctamente.
        if ($stmt) {
            // Vincula los parámetros a la consulta.
            $stmt->bind_param("ss", $especie, $foto);

            // Ejecuta la consulta.
            $stmt->execute();

            // Obtiene el resultado de la consulta.
            $stmt->bind_result($cod_ani);

            // Recupera el resultado.
            if ($stmt->fetch()) {
            // El resultado se almacenará en $cod_ani.
            return $cod_ani;
            }
        }

        return $cod_ani;

    }




    public function codigoUsuario($nombre, $email){
         
        $cod_usu = "";
        
        $sql = "SELECT cod_usu FROM usuario WHERE nombre = ? AND email = ?";
        $stmt = $this->conn->prepare($sql);

        


        // Verificar si la consulta preparada se ejecutó correctamente.
        if ($stmt) {
            // Vincula los parámetros a la consulta.
            $stmt->bind_param("ss", $nombre, $email);

            // Ejecuta la consulta.
            $stmt->execute();

            // Obtiene el resultado de la consulta.
            $stmt->bind_result($cod_usu);

            // Recupera el resultado.
            if ($stmt->fetch()) {
            // El resultado se almacenará en $cod_usu.
            return $cod_usu;
            }
        }

        return $cod_usu;

    }

    public function agregarReporte($animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal) {
        
        
        $sql = "INSERT INTO animal_reporta (especie, foto) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);//stmt = statement
        $sql1 = "INSERT INTO reporte (distrito, referencia, direccion, info_adicional, cod_usu, cod_ani) VALUES (?, ?,?,?,?,?)";
        $stmt2 = $this->conn->prepare($sql1);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            // Asociar los parámetros y ejecutar la consulta
            //las s son por es STRING, y son 9 por nueva parametros
            $stmt->bind_param("ss", $animal, $fotoAnimal);
            $stmt->execute();
            $cod_usu = $this->codigoUsuario($_SESSION["usuario"], $_SESSION["email"]);
            $cod_ani = $this->codigoAnimal($animal, $fotoAnimal);
            
            $stmt2->bind_param("ssssss", $distrito, $referencia, $direccion, $infoAdicional, $cod_usu, $cod_ani);
            $stmt2->execute();
            // Verificar si la inserción fue exitosa
            if ($stmt->affected_rows > 0) {//Fila agrega mayor a 0 
                return true; // Reporte agregado exitosamente
            } else {
                return false; // Error al agregar el reporte
            }
            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            return false; // Error al preparar la consulta
        }
    }

    public function listarAnimalesReporta() {
        $animales_reporte = [];
    
        $sql = "SELECT * 
        FROM animal_reporta ar 
        JOIN reporte r ON ar.cod_ani = r.cod_ani
        LIMIT 10;
        ";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animales_reporte[] = $row;
            }
        }
    
        return $animales_reporte;
    }


    public function listarAnimalUnico($dataImageValue){

        $animalUnico = null;
        // Preparar la consulta SQL con un parámetro
        $stmt = $this->conn->prepare("SELECT *  FROM animal_reporta ar JOIN reporte r ON ar.cod_ani = r.cod_ani
        where r.cod_ani = ? ");
        $stmt->bind_param("s", $dataImageValue); // "s" indica que el parámetro es una cadena
        $stmt->execute();
        $result = $stmt->get_result();
    



        if ($result->num_rows > 0) {
            $animalUnico = $result->fetch_assoc();
            // Mensaje de depuración para verificar si se obtienen resultados de la base de datos
            error_log("Resultados obtenidos: " . print_r($animalUnico, true));
    
        }
    
        return $animalUnico;


    }


    
}
