<?php
session_start();
// var_dump($_SESSION); de prueba para ver si funciona
echo 'Bienvenido, ' . $_SESSION['usuario'];
