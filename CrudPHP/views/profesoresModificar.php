<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulario de registro</title>
</head>
<body>
    <h2 class="display-2" style="text-align: center;">Formulario de modificacion</h2>
    <div style="text-align: center;">
    <form action="../models/ProfesoresPut.php" method="post">
        <label class="form-label" for="nif">NIF del profesor a modificar:</label>
        <input class="form-control" type="text" id="nif" name="nif" required><br><br>
        
        <label class="form-label" for="nombre">Nombre:</label>
        <input class="form-control" type="text" id="nombre" name="nombre" required><br><br>
        
        <label class="form-label" for="apellido1">Primer Apellido:</label>
        <input class="form-control" type="text" id="apellido1" name="apellido1" required><br><br>
        
        <label class="form-label" for="apellido2">Segundo Apellido:</label>
        <input class="form-control" type="text" id="apellido2" name="apellido2" required><br><br>
        
        <label class="form-label" for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br><br>
        
        <label class="form-label" for="direccion">Dirección:</label>
        <input class="form-control" type="text" id="direccion" name="direccion" required><br><br>
        
        <label class="form-label" for="codigoPostal">Código Postal:</label>
        <input class="form-control" type="text" id="codigoPostal" name="codigoPostal" required><br><br>
        
        <label class="form-label" for="municipio">Municipio:</label>
        <input class="form-control" type="text" id="municipio" name="municipio" required><br><br>
        
        <label class="form-label" for="provincia">Provincia:</label>
        <input class="form-control" type="text" id="provincia" name="provincia" required><br><br>
        
        <label class="form-label" for="categoria">Categoria:</label>
        <input class="form-control" type="text" id="categoria" name="categoria"><br><br>
        
        <input class="btn btn-primary" type="submit" value="Modificar">
    </form>
</div>
</body>
</html>