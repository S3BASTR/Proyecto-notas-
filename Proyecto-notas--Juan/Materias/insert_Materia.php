<?php
include("connectionMateria.php");
$con = connection();

$MATERIA = $_POST['namem'];

$sql = "INSERT INTO MATERIAS VALUES('$MATERIA')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location:indexMATERIA.php");
}else{

}

?>