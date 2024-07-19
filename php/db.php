<?php
$servername = "localhost";
$username = "root"; // o el usuario que hayas configurado
$password = ""; // o la contraseña que hayas configurado
$dbname = "bionat"; // nombre de la base de datos

// Crear conexión
$conn = new mysqli($slocalhost, $root, $password, $bionat);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
