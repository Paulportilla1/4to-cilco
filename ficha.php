<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Médico</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="header-container">
            <img src="/media/bionat.jpg" alt="Logo" class="logo">
            <nav>
                <button class="nav-button">Pacientes</button>
                <button class="nav-button">Ingresos</button>
                <button class="nav-button">Medicos</button>
                <button class="nav-button" id="salir-button">Salir</button>
                <button class="nav-button user-button">Registro Usuario</button>
            </nav>
        </div>
    </header>
    <main>
        <form class="form-container" method="POST" action="php/process_form.php">
            <h2>MENÚ DE INGRESOS</h2>
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>
                
                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" name="domicilio" required>
                
                <label for="cedula">Cédula Paciente:</label>
                <input type="text" id="cedula" name="cedula" required>
                
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
                
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <hr class="divider">
            <h2>ANTECEDENTES MEDICOS</h2>
            <div class="form-group">
                <label for="medico">Médico que le atiende:</label>
                <input type="text" id="medico" name="medico" required>
                
                <label for="presion">Presión Arterial:</label>
                <input type="text" id="presion" name="presion" required>
                
                <label for="peso">Peso:</label>
                <input type="text" id="peso" name="peso" required>
                
                <label for="grupo-sanguineo">Grupo Sanguíneo:</label>
                <input type="text" id="grupo-sanguineo" name="grupo-sanguineo" required>
                
                <label for="talla">Talla:</label>
                <input type="text" id="talla" name="talla" required>
                
                <label for="enfermedad-cronica">¿Padece de alguna enfermedad crónica?</label>
                <input type="text" id="enfermedad-cronica" name="enfermedad-cronica">
                
                <label for="alergico">¿Alérgico?</label>
                <select id="alergico" name="alergico" required>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Registrar Ingreso</button>
        </form>
    </main>
</body>
<script>
    document.getElementById('salir-button').addEventListener('click', function() {
        window.location.href = 'index.html';
    });
</script>

</html>
