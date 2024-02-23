<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Baja de Profesor</title>
</head>
<body>
    <h2 class="display-2" style="text-align: center;">Baja de Profesor</h2>
    <div style="text-align: center;">
    <form action="../models/ProfesoresDelete.php" method="POST">
        <label class="form-label" for="nif">NIF del profesor a dar de baja:</label><br>
        <input class="form-control" type="text" id="nif" name="nif" required><br><br>
        <input class="btn btn-primary" type="submit" value="Dar de baja">
    </form>
</div>
</body>
</html>
