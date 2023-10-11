<?php
session_start();
if(!empty($_POST["usuario"])){
    if(empty($_POST["usuario"]) and empty($_POST["password"])){
        echo "Los campos estan vacios";
    }else{
        $usuario=$_POST["usuario"];
        $pass=$_POST["password"];
        $sql=$conexion->query("select * from login where usuario='$usuario' and password='$pass' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["usuario"]=$datos->usuario;
            $_SESSION["email"]=$datos->email;
            $_SESSION["password"]=$datos->password;
            header("location:index_log.php");
        }else{
            echo '<div>Acceso denegado</div>';
        }
    }
}

?>
