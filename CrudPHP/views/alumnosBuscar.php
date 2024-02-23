<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Alumno</title>
</head>
<body>
    <h2>Buscar Alumno</h2>
    <form action="../models/alumnosBus.php" method="POST">
        <label for="nif">NIF del alumno a dar de baja:</label><br>
        <input type="text" id="nif" name="nif" required><br><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>