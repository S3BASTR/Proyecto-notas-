<?php
include("connection.php");
$con = connection();

$ID_ESTUDIANTE = null;
$NOMBREE = $_POST['nombree'];
$APELLIDOE = $_POST['apellidoe'];
$DOCUMENTOE = $_POST['documentoe'];
$CORREOE = $_POST['correoe'];
$MATERIAE = $_POST['materiae'];
$DOCENTE = $_POST['docentee'];
$PROMEDIO = $_POST['notae'];
$FECHA_REGISTRO = $_POST['fechae'];


$sql = "INSERT INTO estudiantes VALUES('$ID_ESTUDIANTE ','$NOMBREE','$APELLIDOE','$DOCUMENTOE','$CORREOE','$MATERIAE','$DOCENTE','$PROMEDIO','$FECHA_REGISTRO')";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: indexes.php");
}else{

}

?>