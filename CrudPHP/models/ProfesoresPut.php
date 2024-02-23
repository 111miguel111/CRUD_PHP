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
$categoria = $_POST['categoria'];

// Preparar la consulta SQL
$sql = "UPDATE profesor SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', email='$email', direccion='$direccion', codigoPostal='$codigoPostal', municipio='$municipio', provincia='$provincia', categoria='$categoria' WHERE NIF='$nif'";

if ($conn->query($sql) === TRUE) {
    echo "Datos del profesor actualizados correctamente";
} else {
    echo "Error al actualizar los datos del profesor: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
