
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
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Dirección</th>
					<th>Codigo postal</th>
                <tr>
            </thead>
                <?php
                require_once("../controllers/AlumnosController.php");
                $c = new AlumnosController();
                $dni = "12345679B";
                $alumno = $c->get();
                var_dump($_REQUEST);

                foreach ($alumno as $value) {
                    echo "<tr>";
                    echo "<td>" . $value['nombre'] . "</td>";
                    echo "<td>" . $value['apellido1'] . " " . $value['apellido2'] . "</td>";
                    echo "<td>" . $value['email'] . "</td>";
                    echo "<td>" . $value['direccion'] . "</td>";
					echo "<td>" . $value['codigoPostal'] . "</td>";
                    echo "</tr>";
                }
                
                ?>
        </table>
    </div>


    </div>

</body>

</html>