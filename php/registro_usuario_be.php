<?php
include 'configure_ficha.php'; // Asegúrate de que este archivo tenga la conexión en la variable $conn

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha-nacimiento'];
$domicilio = $_POST['domicilio'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$genero = $_POST['genero'];

// Corregir la consulta SQL
$query = "INSERT INTO pacientes (nombre, fecha_nacimiento, domicilio, cedula, telefono, genero)
          VALUES ('$nombre', '$fecha_nacimiento', '$domicilio', '$cedula', '$telefono', '$genero')";

// Ejecutar la consulta
$ejecutar = mysqli_query($conn, $query);

// Verificar si la consulta se ejecutó correctamente
if ($ejecutar) {
    echo '
    <script>
        alert("Nuevo registro creado exitosamente");
        window.location = "../doctores.html"; // Redirige a otra página después de la inserción
    </script>
    ';
} else {
    // Mostrar error en caso de fallo
    echo 'Error al almacenar el registro: ' . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
