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
    <h2>Formulario de registro</h2>
    <form action="../models/ProfesoresPut.php" method="post">
        <label for="nif">NIF:</label>
        <input type="text" id="nif" name="nif" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required><br><br>
        
        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="apellido2" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label for="codigoPostal">Código Postal:</label>
        <input type="text" id="codigoPostal" name="codigoPostal" required><br><br>
        
        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="municipio" required><br><br>
        
        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia" required><br><br>
        
        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>