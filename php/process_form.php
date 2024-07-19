<?php
// Configuración de la base de datos
$servername = "localhost"; // Cambia si es necesario
$username = "root";
$password = "";
$dbname = "bionat";

// Crear conexión
$conn = mysqli_connect("localhost", "root", "", "bionat");

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO ingresos (nombre, fecha_nacimiento, domicilio, cedula, telefono, genero, medico, presion, peso, grupo_sanguineo, talla, enfermedad_cronica, alergico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $nombre, $fecha_nacimiento, $domicilio, $cedula, $telefono, $genero, $medico, $presion, $peso, $grupo_sanguineo, $talla, $enfermedad_cronica, $alergico);

// Obtener valores del formulario
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha-nacimiento'];
$domicilio = $_POST['domicilio'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$genero = $_POST['genero'];
$medico = $_POST['medico'];
$presion = $_POST['presion'];
$peso = $_POST['peso'];
$grupo_sanguineo = $_POST['grupo-sanguineo'];
$talla = $_POST['talla'];
$enfermedad_cronica = $_POST['enfermedad-cronica'];
$alergico = $_POST['alergico'];

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
