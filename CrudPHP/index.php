<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="card">
	<h1 class="display-2" style="text-align: center;">CRUD</h5>
	  <div class="card-body" style="text-align: center;">
		<h5 class="CRUD" style="text-align: center;">ALUMNOS</h5>
		<!--./alumnos?=45-->
		<a href="./views/alumnos.php" class="btn btn-primary">Listar alumnos</a>
		<a href="./views/alumnosAlta.php" class="btn btn-success">Alta alumnos</a>
		<a href="./views/alumnosDel.php" class="btn btn-danger">Baja alumnos</a>
		<a href="./views/alumnosBuscar.php" class="btn btn-info">Buscar alumnos</a>
		<a href="./views/alumnosModificar.php" class="btn btn-warning">Modificar alumnos</a>
	  </div>
	  <div class="card-body" style="text-align: center;">
		<h5 class="CRUD" style="text-align: center;">POFESORES</h5>
		<!--./profesores?=45-->
		<a href="./views/profesores.php" class="btn btn-primary">Listar profesores</a>
		<a href="./views/profesoresAlta.php" class="btn btn-success">Alta profesores</a>
		<a href="./views/profesoresDel.php" class="btn btn-danger">Baja profesores</a>
		<a href="./views/profesoresBuscar.php" class="btn btn-info">Buscar profesores</a>
		<a href="./views/profesoresModificar.php" class="btn btn-warning">Modificar profesores</a>
	  </div>
	</div>
</div>
</body>
</html>