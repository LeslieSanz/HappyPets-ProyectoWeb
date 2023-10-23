<?php 

include("conexionbd.php");



        if(isset($_POST['enviarDatosForm'])){

            if(strlen($_POST['nombres-apellidos']) >= 1 &&
            strlen($_POST['celular']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['animal']) >= 1 &&
            strlen($_POST['distrito']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['referencia']) >= 1 &&
            strlen($_POST['info-adicional']) >= 1 &&
            strlen($_POST['foto-animal']) >= 1 ){

                $nombreApellido = $_POST['nombres-apellidos'];
                $celular = $_POST['celular'];
                $correo = $_POST['correo'];
                $animal = $_POST['animal'];
                $distrito = $_POST['distrito'];
                $direccion = $_POST['direccion'];
                $referencia = $_POST['referencia'];
                $infoAdicional = $_POST['info-adicional'];
                $fotoAnimal = $_POST['foto-animal'];

                
                $consulta = "INSERT INTO reporta(Contacto_Nombre, Celular, correo, Especie, Distrito_animal, DIrec_Animal, Refere_animal, info_animal, foto) VALUES ('$nombreApellido','$celular','$correo','$animal','$distrito','$direccion','$referencia','$infoAdicional','$fotoAnimal')";

                $resultado = mysqli_query($conexion, $consulta);



        
            }
        

        }


?>