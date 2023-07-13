<?php
include("connection.php");
$con = connection();

$ID_MATERIA = null;
$MATERIA = $_POST['namema'];

$sql = "INSERT INTO materias VALUES('$ID_MATERIA','$MATERIA')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index_materias.php");
}else{

}

?>