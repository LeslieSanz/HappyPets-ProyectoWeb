<?php

if (!empty($_POST["registro"])){
    if(empty($_POST["usuario"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["repassword"])){
        echo '<div class="msgbddnoreg">Uno de los campos está vacío</div>';
    }else{
        $usuario=$_POST["usuario"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];

        $sql=$conexion->query(" insert into login(usuario,email,password,repassword)values('$usuario','$email','$password','$repassword') ");

        if($sql==1){
            echo '<div class="msgbddbien">Usuario registrado correctamente</div>';
            header("location:inicio.php");
        }else{
            echo '<div class="msgbddnoreg">Error al registrar usuario</div>';
        }
    }
}

?>
