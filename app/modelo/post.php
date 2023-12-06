<?php
require_once __DIR__ . '/../config/database.php';

class post {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }


    public function agregarPost($categoria,$titulo,$contenido,$foto){
        $sql = "INSERT INTO post(categoria,titulo,contenido,foto) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("ssss", $categoria,$titulo,$contenido,$foto);
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

    public function eliminarPost($codigo) {
        $sql = "DELETE FROM post WHERE cod_post = ?";
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
    

    public function listarUnPost($codigo){
        echo "entrando a la función";
        $post = null;
    
        // Preparar la consulta SQL con un parámetro
        $stmt = $this->conn->prepare("SELECT * FROM post WHERE cod_post = ?");
        $stmt->bind_param("s", $codigo); // "s" indica que el parámetro es una cadena
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $post = $result->fetch_assoc();
        }
    
        return $post;

    }

    public function listarPosts() {
        $posts = [];
    
        $sql = "SELECT * FROM post";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
    
        return  $posts;
    }



   // public function listarPosts() {
    //    $posts = [];
    
   //     $sql = "SELECT * FROM post WHERE disponibilidad = 'Sí'";
   //     $result = $this->conn->query($sql);
    
   //     if ($result->num_rows > 0) {
   //         while ($row = $result->fetch_assoc()) {
    //            $animales[] = $row;
    //        }
    //    }
    
    //    return $posts;
    //}

   // public function listarAnimalesAdoptados() {
    //    $animalesAdoptados = [];
    
    //    $sql = "SELECT * FROM animal_adopta WHERE disponibilidad = 'No' LIMIT 4";
   //     $result = $this->conn->query($sql);
    
    //    if ($result->num_rows > 0) {
    //        while ($row = $result->fetch_assoc()) {
   //             $animalesAdoptados[] = $row;
           // }
     //   }
    
   //     return $animalesAdoptados;
    //}

    public function actualizarPost($categoria,$titulo,$contenido,$codigo) {
        $sql = "UPDATE post SET categoria = ?,titulo = ?,contenido = ? WHERE cod_post = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("ssss", $categoria,$titulo,$contenido,$codigo);
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

    public function actualizarFotoPost($foto,$codigo) {
        $sql = "UPDATE post SET foto = ? WHERE cod_post = ?";
        $stmt = $this->conn->prepare($sql);
        
        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            $stmt->bind_param("ss", $foto,$codigo);
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


   // public function filtroAnimales($filtro) {
       // $animales = [];
    
      //  $sql = "SELECT * FROM animal_adopta WHERE disponibilidad = 'Sí' AND $filtro";
       // $result = $this->conn->query($sql);
    
       // if ($result->num_rows > 0) {
       //     while ($row = $result->fetch_assoc()) {
       //         $animales[] = $row;
        //    }
       // }
    
       // return $animales;
   // }

}
