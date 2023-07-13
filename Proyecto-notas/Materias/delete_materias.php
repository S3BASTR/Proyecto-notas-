<?php

include("connection.php");
$con = connection();

$ID_MATERIA=$_GET["ID_MATERIA"];

$sql="DELETE FROM materias WHERE ID_MATERIA='$ID_MATERIA'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_materias.php");
}else{

}

?>