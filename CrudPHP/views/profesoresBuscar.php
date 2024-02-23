<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de Alumno</title>
</head>
<body>
    <h2>Buscar de profesor</h2>
    <form action="../models/profesoresBus.php" method="POST">
        <label for="nif">NIF del profesor a buscar:</label><br>
        <input type="text" id="nif" name="nif" required><br><br>
        <input type="submit" value="Dar de baja">
    </form>
</body>
</html>