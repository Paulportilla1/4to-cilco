<?php
include 'db.php';

// Verificar que la conexión se haya establecido correctamente
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener y limpiar los datos del formulario
$nombre = $conn->real_escape_string($_POST['nombre']);
$fecha_nacimiento = $conn->real_escape_string($_POST['fecha-nacimiento']);
$domicilio = $conn->real_escape_string($_POST['domicilio']);
$cedula = $conn->real_escape_string($_POST['cedula']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$genero = $conn->real_escape_string($_POST['genero']);
$medico = $conn->real_escape_string($_POST['medico']);
$presion = $conn->real_escape_string($_POST['presion']);
$peso = $conn->real_escape_string($_POST['peso']);
$grupo_sanguineo = $conn->real_escape_string($_POST['grupo-sanguineo']);
$talla = $conn->real_escape_string($_POST['talla']);
$enfermedad_cronica = $conn->real_escape_string($_POST['enfermedad-cronica']);
$alergico = $conn->real_escape_string($_POST['alergico']);

// Preparar la consulta SQL
$sql = "INSERT INTO pacientes (nombre, fecha_nacimiento, domicilio, cedula, telefono, genero, medico, presion, peso, grupo_sanguineo, talla, enfermedad_cronica, alergico) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Vincular parámetros y ejecutar
$stmt->bind_param("sssssssssssss", $nombre, $fecha_nacimiento, $domicilio, $cedula, $telefono, $genero, $medico, $presion, $peso, $grupo_sanguineo, $talla, $enfermedad_cronica, $alergico);

if ($stmt->execute()) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
