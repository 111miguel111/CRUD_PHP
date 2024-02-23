
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-lg">


        <table class="table table-hover mt-3">
            <thead class="bg-primary">
                </tr class="bg-primary">
					<th>NIF</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
					<th>Mail</th>
                    <th>Dirección</th>
					<th>Codigo Postal</th>
					<th>Municipio</th>
					<th>Provincia</th>
                <tr>
            </thead>
                <?php
                require_once("../controllers/ProfesoresController.php");
                $c = new ProfesoresController();
                $dni = "12345679B";
                $profesor = $c->get();
                var_dump($_REQUEST);

                foreach ($profesor as $value) {
                    echo "<tr>";
					echo "<td>" . $value['NIF'] . "</td>";
                    echo "<td>" . $value['nombre'] . "</td>";
                    echo "<td>" . $value['apellido1'] . " " . $value['apellido2'] . "</td>";
                    echo "<td>" . $value['email'] . "</td>";
                    echo "<td>" . $value['direccion'] . "</td>";
					echo "<td>" . $value['codigoPostal'] . "</td>";
					echo "<td>" . $value['municipio'] . "</td>";
					echo "<td>" . $value['provincia'] . "</td>";
					
                    echo "</tr>";
                }
                
                ?>
        </table>
    </div>


    </div>

</body>

</html>