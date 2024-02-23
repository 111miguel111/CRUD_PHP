<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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

    // Consultar el alumno por su NIF
    $sql = "SELECT * FROM profesor WHERE NIF = '$nif'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos del alumno en una tabla HTML
        echo "<h2>Datos del Profesor</h2>";
        echo "<table border='1' class='table table-hover mt-3'>";
        echo "<tr><th>NIF</th><th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Email</th><th>Dirección</th><th>Código Postal</th><th>Municipio</th><th>Provincia</th><th>Categoria</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['NIF'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido1'] . "</td>";
            echo "<td>" . $row['apellido2'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['codigoPostal'] . "</td>";
            echo "<td>" . $row['municipio'] . "</td>";
            echo "<td>" . $row['provincia'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontró ningún profesor con el NIF $nif";
    }

    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>