<?php

$conexion = mysqli_connect("localhost", "root", "", "proyecto_main");


// Verificar la conexión
if (!$conexion) {
    // Obtener el error de conexión
    die("Conexión fallida: " . mysqli_connect_error());
} 

echo 'Conectado exitosamente a la Base de Datos';

?>
