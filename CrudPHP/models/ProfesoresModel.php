<?php

require_once("Model.php");

class ProfesoresModel extends Model
{

    private $profesor;

    public function set($al_data = array())
    {
        foreach ($al_data as $key => $value) {
            $$key = $value;
        }

        $this->consulta = "REPLACE INTO profesor (nombre, apellido1) VALUES ('$nombre',$apellido1)";
        $this->set_query();
    }

    public function get($nif = '')
    {
        $this->consulta = ($nif != '')
            ? "SELECT * FROM profesor WHERE nif = '$nif'"
            : "SELECT * FROM profesor ORDER BY nombre ASC ";

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

        $this->consulta = "DELETE FROM profesor WHERE nif = '$nif'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->profesor);
    }
}
   
   ?>