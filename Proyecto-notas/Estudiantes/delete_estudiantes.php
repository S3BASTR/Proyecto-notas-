<?php

include("connection.php");
$con = connection();

$ID_ESTUDIANTE=$_GET["ID_ESTUDIANTE"];

$sql="DELETE FROM estudiantes WHERE ID_ESTUDIANTE='$ID_ESTUDIANTE'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexes.php");
}else{

}

?>