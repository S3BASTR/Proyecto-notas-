<?php

include("connectionMateria.php");
$con = connection();

$ID_MATERIA=$_GET["ID_MATERIA"];

$sql="DELETE FROM MATERIAS WHERE ID_MATERIA='$ID_MATERIA'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexMATERIA.php");
}else{

}

?>