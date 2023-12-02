<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/admin.php';

// Controlar mostrar usuarios
$adminDAO = new admin($conn);

// Obtener la lista de usuarios
$adminData = $adminDAO->usuarios();

// Devuelve los datos como JSON
echo json_encode($adminData);
?>
