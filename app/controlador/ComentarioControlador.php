<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Comentario.php';
require_once __DIR__ . '/../modelo/Usuario.php';

//Controlar mostrar usuarios
$comentarioDAO = new comentario($conn); 

// Obtener la lista de usuarios
$comentarios = $comentarioDAO->listarComentarios();

class ComentarioControlador {
    // Otras funciones y propiedades de tu controlador

    public function obtenerNombreUsuario($cod_usu) {
        $usuarioDAO = new Usuario($this->conn); // Suponiendo que la conexión está disponible en $this->conn

        // Utiliza la función en tu modelo Usuario para obtener el nombre por el código de usuario
        $usuario = $usuarioDAO->obtenerNombrePorCodigo($cod_usu);

        return $usuario; // Ajusta según la estructura de tu modelo Usuario
    }
}

if (isset($_SESSION['usuario'])) {
    $usuario = new Usuario($conn);
    $cod = $_SESSION["cod_usu"];
    $usuario = $usuario->obtenerUsuarioPorCodUsu($cod); // Asigna el resultado a $usuario

    // Verifica si el usuario se obtuvo correctamente
    if ($usuario !== null) {
        // Depuración
       // var_dump($usuario); // Verifica la estructura y los valores de $usuario
    } else {
        echo "Usuario no encontrado";
    }
}


// Verificar si el usuario está logeado
if(isset($_SESSION['cod_usu'])){
    $codigo_usuario = $_SESSION['cod_usu'];

    // Obtener la lista de comentarios
    $sql = "SELECT c.cod_com, c.contenido, c.fecha_publi, c.cod_usu, u.nombre 
            FROM comentario c 
            INNER JOIN usuario u ON c.cod_usu = u.cod_usu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
/////////jejejejejejejeje
        }
    } else {
       echo "No hay comentarios aún.";
        }
    } else {
    echo "";
    ;
    }


    if (isset($_POST["record"])) {
        $codigoComentario= $_POST["record"];
    
        if ($comentarioDAO->eliminarComentario($codigoComentario)) {
            echo "Comentario eliminado correctamente";
        } else {
            echo "Hubo un problema al eliminar el comentario";
        }
    } 
    

?>