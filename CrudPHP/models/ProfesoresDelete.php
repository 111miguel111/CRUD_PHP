<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "facultad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir NIF del formulario
$nif = $_POST['nif'];

// Consultar si el alumno existe
$sql = "SELECT * FROM profesor WHERE NIF = '$nif'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si el alumno existe, eliminarlo
    $sql_delete = "DELETE FROM profesor WHERE NIF = '$nif'";
    
    if ($conn->query($sql_delete) === TRUE) {
        echo "Profesor eliminado correctamente";
    } else {
        echo "Error al eliminar el profesor: " . $conn->error;
    }
} else {
    echo "El profesor con NIF $nif no existe";
}

// Cerrar conexión
$conn->close();
?>