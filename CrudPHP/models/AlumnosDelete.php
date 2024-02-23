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
$sql = "SELECT * FROM alumno WHERE NIF = '$nif'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si el alumno existe, eliminarlo
    $sql_delete = "DELETE FROM alumno WHERE NIF = '$nif'";
    
    if ($conn->query($sql_delete) === TRUE) {
        echo "Alumno eliminado correctamente";
    } else {
        echo "Error al eliminar el alumno: " . $conn->error;
    }
} else {
    echo "El alumno con NIF $nif no existe";
}

// Cerrar conexión
$conn->close();
?>