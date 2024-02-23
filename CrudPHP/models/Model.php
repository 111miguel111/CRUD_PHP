<?php

abstract class Model
{

    private $enlace;
    //private static   $db_charset = 'utf8';
    protected $consulta;
    protected $rows = array();

    abstract protected function set();
    abstract protected function get();
    abstract protected function del();

    function __construct($host = "localhost", $username = "root", $passwd = "", $dbname = "facultad")
    {
        $this->enlace = mysqli_connect($host, $username, $passwd, $dbname) or die("Tienes un error" . mysqli_error($this->enlace));
        //$this->enlace->set_charset(self::$db_charset);
    }

    protected function set_query()
    {
        $this->enlace->query($this->consulta);
        $this->db_close();
    }


    protected function get_query()
    {

        $result = $this->enlace->query($this->consulta);

        while ($this->rows[] = $result->fetch_assoc());
        $result->close();

        return array_pop($this->rows);
        $this->db_close();
    }


    function db_close()
    {
        $this->enlace->close();
    }
}