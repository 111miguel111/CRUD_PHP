

<?php
    require_once("../models/AlumnosModel.php");


    if(isset($_POST['NIF']) and isset($_POST['Nombre']) and isset($_POST['Apellido1']) and isset($_POST['Apellido2']) and  isset($_POST['Email']) 
        and isset($_POST['Direccion']) and isset($_POST['Codigo postal']) and isset($_POST['Municipio']) and isset($_POST['Provincia'])){
        $nif = $_POST['NIF'];
        $nomb = $_POST['Nombre'];
        $ape1 = $_POST['Apellido1'];
        $ape2 = $_POST['Apellido2'];
        $email = $_POST['Email'];
        $direc = $_POST['Direccion'];
        $cod = $_POST['Codigo postal'];
        $mun = $_POST['Municipio'];
        $prov = $_POST['Provincia'];
        $beca = $_POST['Beca'];
        $c = new AlumnosController();
        $alumno = array($nif, $nomb, $ape1, $ape2, $email, $direc, $cod, $mun, $prov, $beca);
        $c->set($alumno);
    }
?>