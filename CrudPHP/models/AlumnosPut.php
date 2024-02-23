<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$codigoPostal = $_POST['codigoPostal'];
$municipio = $_POST['municipio'];
$provincia = $_POST['provincia'];
$beca = isset($_POST['beca']) ? 1 : 0; // Si el checkbox está marcado, beca es 1, de lo contrario, 0

// Preparar la consulta SQL
$sql = "UPDATE alumno SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', email='$email', direccion='$direccion', codigoPostal='$codigoPostal', municipio='$municipio', provincia='$provincia', beca='$beca' WHERE NIF='$nif'";

if ($conn->query($sql) === TRUE) {
    echo "Datos del alumno actualizados correctamente";
} else {
    echo "Error al actualizar los datos del alumno: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
