<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de Profesor</title>
</head>
<body>
    <h2>Baja de Profesor</h2>
    <form action="../models/ProfesoresDelete.php" method="POST">
        <label for="nif">NIF del alumno a dar de baja:</label><br>
        <input type="text" id="nif" name="nif" required><br><br>
        <input type="submit" value="Dar de baja">
    </form>
</body>
</html>
