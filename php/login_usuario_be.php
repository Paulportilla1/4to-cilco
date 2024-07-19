<?php
session_start();
include 'conecion_be.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Verificar si el usuario existe
$validar_email = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE email='$email'");

if (mysqli_num_rows($validar_email) > 0) {
    // Verificar si la contraseña es correcta
    $validar_login = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE email='$email' AND password='$password'");

    if (mysqli_num_rows($validar_login) > 0) {
        header("Location: ../ficha.php");
        exit;
    } else {
        // Contraseña incorrecta
        $_SESSION['error'] = "Contraseña incorrecta";
        header("Location: ../registrar.php");
        exit;
    }
} else {
    // Usuario no registrado
    $_SESSION['error'] = "Usuario no registrado";
    header("Location: ../registrar.php");
    exit;
}

mysqli_close($conexion);
?>
