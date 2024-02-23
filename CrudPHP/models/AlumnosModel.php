<?php

require_once("Model.php");

class AlumnosModel extends Model
{

    private $alumno;

    public function set($al_data = array())
    {

        // Recibir datos del formulario
        $nif = $_POST['nif'];
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $codigoPostal = $_POST['codigoPostal'];
        $municipio = $_POST['municipio'];
        $provincia = $_POST['provincia'];
        $beca = isset($_POST['beca']) ? 1 : 0; // Si el checkbox está marcado, beca es 1, de lo contrario, 0

        // Preparar la consulta SQL
        $sql = "INSERT INTO datos_personales (NIF, nombre, apellido1, apellido2, email, direccion, codigoPostal, municipio, provincia, beca)
        VALUES ('$nif', '$nombre', '$apellido1', '$apellido2', '$email', '$direccion', '$codigoPostal', '$municipio', '$provincia', '$beca')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro insertado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Cerrar conexión
        $conn->close();
    }

    public function get($nif = '')
    {
        $this->consulta = ($nif != '')
            ? "SELECT * FROM alumno WHERE nif = '$nif'"
            : "SELECT * FROM alumno ORDER BY nombre ASC ";

        $this->get_query();
        $nus_rows = count($this->rows);
        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        //var_dump($this->rows);

        return $data;
    }


    public function del($nif = '')
    {

        $this->consulta = "DELETE FROM alumno WHERE nif = '$nif'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->alumno);
    }
}
   
   ?>