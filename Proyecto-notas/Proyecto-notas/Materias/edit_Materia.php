<?php

include("connectionMateria.php");
$con = connection();

$ID_MATERIA = $_POST["ID_MATERIA"];
$MATERIA = $_POST['namem'];

$sql= "UPDATE MATERIAS SET ID_MATERIA='$ID_MATERIA', MATERIA='$MATERIA'";
$query=mysqli_query($con, $sql);
if($query){
    Header("Location: indexMATERIA.php");
};

?>