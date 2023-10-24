<?php

// conexion con la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "happypets";

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}else {
    echo "Conexión exitosa con base de datos";
}

