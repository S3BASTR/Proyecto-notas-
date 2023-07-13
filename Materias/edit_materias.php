<?php

include("connection.php");
$con = connection();

$ID_MATERIA = $_POST["ID_MATERIA"];
$MATERIA = $_POST['namema'];

$sql= "UPDATE materias SET MATERIA='$MATERIA' WHERE ID_MATERIA='$ID_MATERIA'";
$query=mysqli_query($con, $sql);
if($query){
    Header("Location: index_materias.php");
};

?>