<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/post.php';

//Controlar mostrar posts
$postDAO = new Post($conn); 

// Obtener la lista de posts
$posts = $postDAO->listarPosts();


if (!empty($_POST["RegistrarPost"])) {
    
    if (
        strlen($_POST['categoria']) >= 1 && 
        strlen($_POST['titulo']) >= 1 &&
        strlen($_POST['contenido']) >= 1 &&
        isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0 

     ) {
        $categoria = $_POST["categoria"];
        $titulo = $_POST["titulo"];
        $contenido = $_POST["contenido"];

        // Ruta donde se almacenará la imagen
        $rutaImagen =   '../../uploads/' . basename($_FILES["foto"]["name"]);
        $foto = basename($_FILES["foto"]["name"]);

        $post = new Post($conn);

        // Intentar agregar el usuario a la base de datos
        if ($post->agregarPost($categoria,$titulo,$contenido,$foto)
        && move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaImagen )) {

            echo '<div class="msgbddbien">foto registrado correctamente</div>';
            header("location: ../vista/admin/adminPost.php");

        } else {
            echo '<div class="msgbddnoreg">Error al registrar animal</div>';
        }
    } 
}

if (!empty($_POST["ActualizarPost"])) {
    
    if (
        strlen($_POST['categoria-editar']) >= 1 && 
        strlen($_POST['codigo-secreto']) >= 1 && 
        strlen($_POST['titulo-editar']) >= 1 &&
        strlen($_POST['contenido-editar']) >= 1 

     ) {
        $codigo = $_POST["codigo-secreto"];
        $categoria = $_POST["categoria-editar"];
        $titulo = $_POST["titulo-editar"];
        $contenido = $_POST["contenido-editar"];
          

        $post = new Post($conn);

        if(isset($_FILES["foto-editar"]) && $_FILES["foto-editar"]["error"] == 0){
            // Ruta donde se almacenará la imagen
            $rutaImagen =   '../../uploads/' . basename($_FILES["foto-editar"]["name"]);
            $foto = basename($_FILES["foto-editar"]["name"]);
            $resultado = $post->ActualizarFotoPost($foto,$codigo);
        }else{
            $resultado = $post->ActualizarPost($categoria,$titulo,$contenido,$foto);
        }

        // Intentar actualizar los datos del animal
        if ($resultado) {

            echo '<div class="msgbddbien">Post actualizado correctamente</div>';
            header("location: ../vista/admin/adminPost.php");

        } else {
            echo '<div class="msgbddnoreg">Error al actualizar post</div>';
        }
    } 
}


//if (isset($_POST["enviar"])) {
   // $filtro = '';

   // $tipo_animal = $_POST["tipo-animal"];
   // $sexo_animal = $_POST["sexo-animal"];
   // $tamano_animal = $_POST["tamano-animal"];
   // $edad_animal = $_POST["edad-animal"];

   // if ($tipo_animal != 'todos') {
   //     $filtro .= "especie = '$tipo_animal'";
   // }

   // if ($sexo_animal != 'todos') {
   //     if ($filtro != '') {
   //         $filtro .= " AND ";
   //     }
   //     $filtro .= "sexo = '$sexo_animal'";
   // }

   // if ($tamano_animal != 'todos') {
   //     if ($filtro != '') {
   //         $filtro .= " AND ";
   //     }
   //     $filtro .= "tamano = '$tamano_animal'";
   // }

   // if ($edad_animal != 'todos') {
   //     if ($filtro != '') {
   //         $filtro .= " AND ";
   //     }
   //     $filtro .= "edad = '$edad_animal'";
   // }








if (isset($_GET["codigo"])) { 
    echo "Capturando el código";
    $codigoPost = $_GET["codigo"];
    $postDetalles = $postDAO->listarUnPost($codigoPost);

    if (!empty($postDetalles)) {
        echo "Se encontró info";
    } else {
        echo "No se encontró info para el post con el código: $codigoPost";

    }
}



if (isset($_POST["record"])) {
    $codigoPost = $_POST["record"];

    if ($postDAO->eliminarPost($codigoPost)) {
        echo "Post eliminado correctamente";
    } else {
        echo "Hubo un problema al eliminar el post";
    }
} 


if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    if (isset($_POST['codigo'])) {
        $codigo = $_POST['codigo'];

        // Mensaje de depuración para verificar el valor de $dataImageValue
        error_log("Valor de codigo recibido: " . $codigo);

        // Llama a la función listar un animal
        $postDetalles = $postDAO->listarUnPost($codigo);

        // Después de obtener los datos de la base de datos, devuelve los datos en formato JSON
        echo json_encode($postDetalles);

    } else {
        echo "No se recibió el valor codigo.";
    }
}
