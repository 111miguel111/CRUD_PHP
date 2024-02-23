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
$sql = "INSERT INTO profesor (NIF, nombre, apellido1, apellido2, email, direccion, codigoPostal, municipio, provincia, categoria)
VALUES ('$nif', '$nombre', '$apellido1', '$apellido2', '$email', '$direccion', '$codigoPostal', '$municipio', '$provincia', '$categoria')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
