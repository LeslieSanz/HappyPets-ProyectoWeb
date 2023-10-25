<?php

// conexion con la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$BD = "bd_happypets";

$conn = new mysqli($servidor, $usuario, $contrasena, $BD);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}else {
    echo "Conexión exitosa con base de datos";
}

