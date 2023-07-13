<?php

include("connection.php");
$con = connection();

$ID_DOCENTE=$_GET["ID_DOCENTE"];

$sql="DELETE FROM docentes WHERE ID_DOCENTE='$ID_DOCENTE'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexd.php");
}else{

}

?>