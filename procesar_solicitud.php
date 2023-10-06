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

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$medico = $_POST['medico'];
$motivo = $_POST['motivo'];

// Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO citas (nombre_paciente, fecha, hora, medico_asignado, motivo, fecha_creacion)
        VALUES ('$nombre', '$fecha', '$hora', '$medico', '$motivo', NOW())";

// Ejecutar la consulta y verificar si se realizó correctamente
// Después de procesar los datos y realizar la inserción en la base de datos
if ($conexion->query($sql) === TRUE) {
    // Redirigir al usuario al índice (index)
    header("Location: index.html"); // Reemplaza "index.php" con la URL de tu índice
    exit(); // Asegúrate de salir del script después de la redirección
} else {
    echo "Error al registrar la solicitud de cita: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
