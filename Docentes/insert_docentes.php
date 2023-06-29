<?php
include("connection.php");
$con = connection();

$ID_DOCENTE = null;
$NOMBRED = $_POST['named'];
$APELLIDOD = $_POST['lastnamed'];
$DOCUMENTOD = $_POST['documentd'];
$CORREOD = $_POST['emaild'];
$MATERIAD = $_POST['materiasd'];
$PERFILD = $_POST['perfild'];
$ESTADOD = $_POST['estadod'];

$sql = "INSERT INTO docentes VALUES('$ID_DOCENTE ','$NOMBRED','$APELLIDOD','$DOCUMENTOD','$CORREOD','$MATERIAD','$PERFIL','$ESTADO')";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: indexd.php");
}else{

}

?>