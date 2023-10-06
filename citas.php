<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "citas"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Definir una variable para almacenar los datos recuperados
$nombre = "";
$fecha = "";
$hora = "";
$medico = "";
$motivo = "";

// Realizar una consulta SQL para obtener los datos de la cita
$id_cita = 1; // Debes reemplazar esto con el ID de la cita que deseas mostrar
$sql = "SELECT nombre_paciente, fecha, hora, medico_asignado, motivo FROM citas WHERE id = $id_cita";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Si se encontraron resultados, asigna los valores a las variables
    $fila = $resultado->fetch_assoc();
    $nombre = $fila["nombre_paciente"];
    $fecha = $fila["fecha"];
    $hora = $fila["hora"];
    $medico = $fila["medico_asignado"];
    $motivo = $fila["motivo"];
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Cita Médica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Solicitud de Cita Médica</h2>
        <form action="procesar_solicitud.php" method="post">
            <label for="nombre">Nombre del Paciente:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>

            <label for="fecha">Fecha de la Cita:</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>" required>

            <label for="hora">Hora de la Cita:</label>
            <input type="time" id="hora" name="hora" value="<?php echo $hora; ?>" required>

            <label for="medico">Médico Asignado:</label>
            <input type="text" id="medico" name="medico" value="<?php echo $medico; ?>" required>

            <label for="motivo">Motivo de la Cita:</label>
            <textarea id="motivo" name="motivo" rows="4" required><?php echo $motivo; ?></textarea>

            <input type="submit" value="Actualizar Solicitud">
        </form>
    </div>
</body>
</html> 